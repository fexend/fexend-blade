# Fexend Blade

The admin template using tailwind css. this is the laravel version of [fexend template](https://github.com/fexend/fexend-html)

## Installation

### Prerequisites

-   PHP 8.2 or later
-   Composer
-   Node.js 22
-   Git

### Setup Instructions

1. **Clone the repository**

    ```bash
    git clone https://github.com/fexend/fexend-blade.git
    cd fexend-blade
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies**

    ```bash
    npm install
    ```

4. **Configure environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configure database**
   Edit the `.env` file and set your database connection details:

    ```
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=fexend
    DB_USERNAME=postgres
    DB_PASSWORD=your_database_password
    ```

6. **Run database migrations**

    ```bash
    php artisan migrate
    ```

7. **Start the application**
    ```bash
    compose run dev
    ```

## Features or component Available

### Components

-   Accordion
-   Alert
-   Badge
-   Breadcrumb
-   Card
-   Collapse
-   Divider
-   Drawer
-   Dropdown
-   Menu List
-   Modal
-   Popover
-   Tab
-   Table
-   Tooltip
-   Button
-   Input Forms:
    -   Input
    -   Textarea
    -   Select
    -   Date
    -   File
    -   Radio
    -   Switch
    -   Checkbox

### Layouts

-   Layouts 1
-   Layouts 2
-   Layouts 3

### Pages

-   Login
-   Register
-   Forgot Password
-   Reset Password
-   Resend Verification

### Helpers

-   Role permission from `spatie`

## Contribution

We welcome contributions to make Fexend Blade better! Here's how you can contribute:

### Getting Started

1. **Fork the repository** by clicking the Fork button in the top-right corner of the repository page
2. **Clone your fork** to your local machine
3. **Set up the upstream remote**:
    ```bash
    git remote add upstream https://github.com/fexend/fexend-blade.git
    ```

### Making Changes

1. **Create a branch** based on the issue or feature you're working on:
    ```bash
    git checkout -b feat/feature-name
    # or
    git checkout -b fix/bug-name
    ```
2. **Make your changes** following our code style guidelines
3. **Create nor run test** please create the test if you change some code, nor please run test using `php artisan test`
4. **Commit your changes** with clear, descriptive commit messages
5. **Push to your fork**:
    ```bash
    git push origin feat/feature-name
    ```

### Submitting a Pull Request

1. Go to the original repository and create a new pull request
2. Ensure the PR description clearly describes the problem and solution
3. Include the relevant issue number if applicable
4. Wait for maintainers to review your PR

Please ensure your code passes all tests and linting rules before submitting a PR. We appreciate your contributions!
