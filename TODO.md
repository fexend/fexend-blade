# Fexend Blade — Rewrite TODO

> Goal: rewrite fexend-blade from scratch, using fexend-html as the reference source.

---

## Setup

- [x] Fresh Laravel install & config
- [x] Tailwind CSS + Vite setup
- [x] Copy assets (fonts, images, icons, favicon) from fexend-html/public
- [x] Base layout (`layouts/main.blade.php`, `layouts/blank.blade.php`)
- [x] Sidebar component
- [x] Header component
- [x] Mobile menu component
- [x] Loading overlay component
- [x] Flash message component

---

## Layouts

- [x] Main layout (with sidebar + header)
- [x] Blank layout (auth / fullpage)

---

## Blade Components

Migrate from `fexend-html/src/components/`:

- [x] Accordion (`accordion.html`)
- [x] Alert (`alert.html`)
- [x] Avatar (`avatar.html`)
- [x] Badge (`badge.html`)
- [x] Breadcrumb (`breadcrumb.html`)
- [x] Button (`button.html`)
- [x] Card (`card.html`)
- [x] Collapse (`collapse.html`)
- [x] Command Palette (`command-palette.html`)
- [x] Data Filter (`data-filter.html`)
- [x] Divider (`divider.html`)
- [x] Drawer (`drawer.html`)
- [x] Dropdown (`dropdown.html`)
- [x] File Upload (`file-upload.html`)
- [x] Menu List (`menu-list.html`)
- [x] Modal (`modal.html`)
- [x] Pagination (`pagination.html`)
- [x] Popover (`popover.html`)
- [x] Stat Card (`stat-card.html`)
- [x] Stepper (`stepper.html`)
- [x] Tab (`tab.html`)
- [x] Table (`table.html`)
- [x] Timeline (`timeline.html`)
- [x] Toast (`toast.html`)
- [x] Tooltip (`tooltip.html`)

---

## Form Elements

Migrate from `fexend-html/src/elements/`:

- [x] Input (`input.html`)
- [x] Textarea
- [x] Checkbox (`checkbox.html`)
- [x] Radio (`radio.html`)
- [x] Switch (`switch.html`)
- [x] Select (`select2.html`)
- [x] File Upload (`file-upload.html`)
- [x] Date Picker / Flatpickr (`flatpickr.html`)
- [x] WYSIWYG Editor (`wysiwyg.html`)
- [x] DataTable (`datatable.html`)

---

## Pages

### Dashboard

- [ ] Dashboard 1 (`dashboard/dashboard.html`)
- [ ] Dashboard 2 (`dashboard/dashboard2.html`)
- [ ] Dashboard 3 (`dashboard/dashboard3.html`)

### Auth Pages

- [x] Login (`pages/login.html`)
- [x] Register (`pages/register.html`)
- [x] Forgot Password (`pages/forgot-password.html`)
- [x] Reset Password (`pages/reset-password.html`)
- [x] Verify Email (`pages/verify-email.html`)

### App Pages

- [x] Calendar (`pages/calendar.html`)
- [x] Inbox (`pages/inbox.html`)
- [x] Invoice (`pages/invoice.html`)
- [x] Kanban (`pages/kanban.html`)
- [x] Users (`pages/users.html`)

### Error Pages

- [x] 404 (`pages/errors/404.html`)
- [x] 500 (`pages/errors/500.html`)
- [x] Maintenance (`pages/errors/maintenance.html`)

### Settings

- [ ] Settings index (`settings/index.html`)
- [ ] Role management (index, create, edit)
- [ ] Permission management (index, create, edit)

---

## Component Showcase Pages

Pages that demonstrate/preview components (like a UI kit reference):

- [ ] Component index (`pages/component.blade.php`)
- [ ] Accordion showcase
- [ ] Alert showcase
- [ ] Avatar showcase ← missing in current blade
- [ ] Badge showcase
- [ ] Breadcrumb showcase
- [ ] Card showcase
- [ ] Collapse showcase
- [ ] Command Palette showcase ← missing in current blade
- [ ] Data Filter showcase ← missing in current blade
- [ ] Divider showcase
- [ ] Drawer showcase
- [ ] Dropdown showcase
- [ ] Menu List showcase
- [ ] Modal showcase
- [ ] Pagination showcase ← missing in current blade
- [ ] Popover showcase
- [ ] Stat Card showcase ← missing in current blade
- [ ] Stepper showcase ← missing in current blade
- [ ] Tab showcase
- [ ] Table showcase
- [ ] Timeline showcase ← missing in current blade
- [ ] Toast showcase
- [ ] Tooltip showcase

### Element Showcase Pages

- [ ] Element index (`pages/element.blade.php`)
- [ ] Button showcase
- [ ] Input showcase
- [ ] Checkbox showcase
- [ ] Radio showcase
- [ ] Switch showcase
- [ ] Select showcase
- [ ] File Upload showcase
- [ ] Date Picker showcase ← missing in current blade
- [ ] WYSIWYG showcase ← missing in current blade
- [x] DataTable showcase

---

## Routes & Controllers

- [ ] Web routes for all pages
- [ ] Auth routes & controllers
- [ ] User CRUD routes & controllers
- [ ] Settings routes & controllers (roles, permissions)

---

## Notes

- Items marked `← missing in current blade` do not exist yet and must be built fresh
- Always reference `fexend-html` source for markup, but adapt to Blade syntax and components
- Keep JS logic in separate files under `resources/js/`
- Use Tailwind utility classes; avoid inline styles
