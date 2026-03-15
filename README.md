# Fexend Blade

A Laravel admin template built on [Fexend HTML](https://github.com/fexend/fexend-html) — a full-featured starting point for Laravel applications with a polished, dark-mode-ready UI.

## Tech Stack

- **Laravel 12** + **Laravel Folio** (file-based routing)
- **Tailwind CSS v4** via `@tailwindcss/vite`
- **Alpine.js v3** — inline interactivity, no build step required
- **Spatie Laravel Permission** — role & permission management
- **DataTables, Select2, Flatpickr, ApexCharts** — pre-integrated JS libraries

## Installation

### Prerequisites

- PHP 8.2+
- Composer
- Node.js 22+ / Bun
- PostgreSQL (or use Docker)

### Setup

1. **Clone the repository**

    ```bash
    git clone https://github.com/fexend/fexend-blade.git
    cd fexend-blade
    ```

2. **Install dependencies**

    ```bash
    composer install
    bun install
    ```

3. **Configure environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure database** — edit `.env`:

    ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=fexend
    DB_USERNAME=fexend
    DB_PASSWORD=secret
    ```

    Or spin up the included Docker services:

    ```bash
    docker compose up -d
    ```

5. **Run migrations**

    ```bash
    php artisan migrate
    ```

6. **Start the dev server**

    ```bash
    php artisan serve   # PHP server → http://localhost:8000
    bun run dev         # Vite (CSS + JS watch)
    ```

---

## UI Components

### Components

| Component | Blade tag |
|---|---|
| Accordion | `<x-accordion>` / `<x-accordion-item>` |
| Alert | `<x-alert>` |
| Avatar | `<x-avatar>` |
| Badge | `<x-badge>` |
| Breadcrumb | `<x-breadcrumb>` / `<x-breadcrumb-item>` |
| Button | `<x-button>` |
| Card | `<x-card>` |
| Collapse | `<x-collapse>` |
| Command Palette | `<x-command-palette>` |
| Data Filter | `<x-data-filter>` |
| Divider | `<x-divider>` |
| Drawer | `<x-drawer>` |
| Dropdown | `<x-dropdown>` / `<x-dropdown-item>` |
| File Upload | `<x-file-upload>` |
| Menu List | `<x-menu-list>` |
| Modal | `<x-modal>` |
| Pagination | `<x-pagination>` |
| Popover | `<x-popover>` |
| Stat Card | `<x-stat-card>` |
| Stepper | `<x-stepper>` / `<x-stepper-item>` |
| Tab | `<x-tab>` |
| Table | `<x-table>` |
| Timeline | `<x-timeline>` / `<x-timeline-item>` |
| Toast | `<x-toast>` |
| Tooltip | `<x-tooltip>` |

### Form Elements

| Element | Blade tag |
|---|---|
| Input | `<x-input>` |
| Input Password | `<x-input-password>` |
| Input Search | `<x-input-search>` |
| Textarea | `<x-textarea>` |
| Select (Select2) | `<x-select>` |
| Checkbox | `<x-checkbox-input>` |
| Radio | `<x-radio-input>` |
| Switch | `<x-switch-input>` |
| File Upload | `<x-drag-and-drop-input>` |
| Date Picker | `<x-flatpickr>` |
| WYSIWYG Editor | `<x-wysiwyg>` |
| Label | `<x-label>` |
| Validation Error | `<x-validation-error-message>` |
| Flash Message | `<x-flash-message>` |

---

## Pages

### Layouts
- Layout 1, 2, 3 (sidebar variants)

### Auth Pages
- Login, Register, Forgot Password, Reset Password
- Verify Email, Resend Verification Email
- Profile (General, Reset Password, Billing)

### App Pages
- Calendar
- Inbox / Messaging
- Invoice
- Kanban Board
- Users

### Error Pages
- 404 Not Found
- 500 Server Error
- Maintenance

### Email Templates
- Email Verification
- Reset Password

### Master / Admin
- User list (DataTables + server-side)
- User create / edit

### Settings
- Role management
- Permission management

---

## Layouts

| Layout | Usage |
|---|---|
| `<x-main title="...">` | Pages with sidebar + navbar |
| `<x-blank title="...">` | Auth, error, and full-page layouts |

---

## Contribution

Contributions are welcome!

1. Fork the repository
2. Create a branch: `git checkout -b feat/my-feature`
3. Make your changes — follow existing code style
4. Write or update tests: `php artisan test`
5. Push and open a pull request

Please ensure all tests pass before submitting. Reference the relevant issue number in your PR description.
