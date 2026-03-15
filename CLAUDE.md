# CLAUDE.md

This file provides guidance to Claude Code when working in this repository.

---

## Project Overview

**Fexend Blade** is a Laravel admin template built on [fexend-html](https://github.com/fexend/fexend-html). It provides a fully functional Laravel starting point with:

- **Laravel 12** + **Laravel Folio** (file-based routing)
- **Tailwind CSS v4** via `@tailwindcss/vite` — CSS-first config in `resources/css/app.css`
- **Alpine.js v3** — All UI interactivity is inline; no separate JS logic files
- **Blade Components** — Reusable UI components in `resources/views/components/`
- **Spatie Permissions** — Role/permission system

The static source of truth is `fexend-html`. When porting or syncing, always reference that project.

---

## Development Commands

```bash
bun install           # Install JS dependencies
bun run dev           # Start Vite dev server (watches CSS + JS)
bun run build         # Production build

composer install      # Install PHP dependencies
php artisan serve     # Start PHP dev server
php artisan migrate   # Run database migrations
```

> Always use **Bun** for JS dependencies — not npm or yarn.

---

## Architecture

### Directory Structure

```
resources/
├── css/
│   ├── app.css               # Tailwind entry point + @theme tokens
│   ├── components.css        # @import barrel for UI components
│   ├── forms.css             # @import barrel for form element CSS
│   ├── layouts.css           # @import barrel for layout CSS
│   ├── libs.css              # @import barrel for third-party library CSS
│   ├── utilities.css         # @import barrel for utility CSS
│   ├── components/           # Per-component CSS (button, card, modal, …)
│   ├── forms/                # Form CSS (input, label, checkbox, radio, switch)
│   ├── layouts/              # Layout CSS (navbar, sidebar, layout, loading)
│   ├── libs/                 # Third-party theming (select2, flatpickr, datatable, wysiwyg)
│   └── utilities/            # Utility CSS (a, heading, list, p)
├── js/
│   └── app.js                # Alpine.js + plugins entry point
└── views/
    ├── components/           # Blade components (<x-button>, <x-modal>, …)
    │   └── layouts/          # Layout sub-components (header, sidebar, loading, mobile-menu)
    ├── layouts/              # Base layout files (main.blade.php, blank.blade.php)
    ├── pages/                # Folio-routed pages
    │   ├── component/        # Component showcase pages
    │   ├── element/          # Form element showcase pages
    │   │   └── forms/        # Form element sub-pages
    │   └── pages/            # Auth + app pages (login, register, 404, calendar, …)
    ├── auth/                 # Functional auth pages (login, register, profile, …)
    ├── master/               # Master data pages (user CRUD)
    ├── settings/             # Settings pages (roles, permissions)
    └── mails/                # Email templates
        └── auth/             # Auth emails (verification, reset password)
```

### Routing — Laravel Folio

Every `.blade.php` under `resources/views/pages/` becomes a route automatically. Always add a named route at the top:

```php
<?php
use function Laravel\Folio\name;
name('pages.my-page');
?>
```

File → route mapping:
- `pages/pages/calendar.blade.php` → `/pages/pages/calendar` → `pages.calendar`
- `pages/element/datatable.blade.php` → `/pages/element/datatable` → `element.datatable`

### Layouts

| Layout | Component | Use for |
|---|---|---|
| Main (with sidebar + navbar) | `<x-main title="...">` | Dashboard, data pages, component showcases |
| Blank (full-page, no sidebar) | `<x-blank title="...">` | Auth pages, error pages, email-style pages |

### Blade Components

All reusable UI lives in `resources/views/components/`. Usage syntax:

```blade
<x-button class="button-primary">Save</x-button>
<x-modal id="confirm" title="Confirm" size="md">...</x-modal>
<x-input name="email" label="Email" required></x-input>
<x-breadcrumb>
    <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
    <x-breadcrumb-item title="Users" active></x-breadcrumb-item>
</x-breadcrumb>
```

---

## Coding Conventions

### CSS
- **Never use raw hex colors** — use `@theme` tokens (`text-primary`, `bg-danger`, etc.)
- **Always include dark mode variants** — `dark:bg-slate-800`, `dark:text-primary-dark`
- **Never style bare HTML elements** (`input`, `select`, `textarea`, `label`) — use opt-in classes: `.input`, `.select`, `.textarea`, `.label`
- **No inline `<style>` blocks** unless preventing FOUC in loading screens
- Add new component CSS to `resources/css/components/<name>.css` and import in `components.css`
- Add new form CSS to `resources/css/forms/<name>.css` and import in `forms.css`

### JavaScript
- Alpine.js only — all `x-data`, `x-show`, `@click`, `:class`, `x-model`, `x-init` stay inline in Blade templates
- Page-specific scripts go in `<x-slot name="scripts"><script>...</script></x-slot>` inside `<x-main>`
- No separate `.js` files for page logic — keep it inline

### Blade
- Prefer `<x-component>` over raw HTML for anything that has a Blade component
- Use `route()` helper for all internal links — never hardcode paths
- `@csrf` required in all POST forms
- `{{ Auth::user()->name }}` for authenticated user data in real pages; hardcode demo data in showcase pages

---

## Common Tasks

### Add a new Folio page

```bash
# Main layout page
touch resources/views/pages/pages/my-page.blade.php
```

```blade
<?php
use function Laravel\Folio\name;
name('pages.my-page');
?>

<x-main title="My Page">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="My Page" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- content here -->
</x-main>
```

### Add a new Blade component

```bash
touch resources/views/components/my-component.blade.php
```

### Add a new CSS component

```bash
touch resources/css/components/my-component.css
# Then add to resources/css/components.css:
echo '@import "./components/my-component.css";' >> resources/css/components.css
```

### Port a page from fexend-html

1. Read the source from `fexend-html/src/pages/<name>.html`
2. Strip: `<!doctype>`, `<head>`, `<body>` attrs, loading screen, navbar, sidebar, mobile menu
3. Wrap content in `<x-main title="...">` or `<x-blank title="...">`
4. Add `<?php use function Laravel\Folio\name; name('...'); ?>`
5. Convert `<ol class="breadcrumb">` → `<x-breadcrumb>` with `<x-breadcrumb-item>` children
6. Replace `href="/src/index.html"` → `href="{{ route('dashboard') }}"`
7. Keep all Alpine.js attributes exactly as-is
8. Move page-specific scripts to `<x-slot name="scripts">`

---

## CSS Sync with fexend-html

The CSS in `resources/css/` must stay in sync with `fexend-html/src/css/`. When syncing:

- Copy files verbatim — no Blade-specific changes needed in CSS
- Run a class-name diff to verify: `diff <(grep -oE '\.[a-z][a-z0-9-]+' src.css | sort -u) <(grep -oE '\.[a-z][a-z0-9-]+' dest.css | sort -u)`
- Never add CSS that doesn't exist in fexend-html without adding it there first

---

## Docker

```bash
docker compose up -d    # Start PostgreSQL + Redis
docker compose down     # Stop services
```

Database defaults: host `127.0.0.1`, port `5432`, db/user `fexend`, password `secret`.
