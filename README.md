# POS Management System

A web-based **Point of Sale (POS) Management System** built with Laravel 12 and PHP. The application provides authentication, dashboard analytics, category and product management, customer management, stock management, and invoice management through a RESTful API and a web-based interface.

## 🚀 Features

- **Authentication:** User registration, login, and logout using Laravel Sanctum.
- **Dashboard:** Summary and overview of business activities.
- **Category Management:** Create, view, update, and delete categories.
- **Product Management:** Manage product information and inventory items.
- **Customer Management:** Maintain customer records.
- **Stock Management:** Stock-in operations and stock adjustments.
- **Invoice Management:** Create, view, update, and delete invoices.
- **RESTful API:** Organized API endpoints under the `/api/v1` prefix.
- **Protected Routes:** Authentication middleware for secured pages and API endpoints.

## 🛠️ Technologies Used

- **Backend:** PHP, Laravel 12
- **Authentication:** Laravel Sanctum
- **Database:** MySQL / SQLite
- **API:** RESTful API, JSON
- **Frontend:** HTML, CSS, JavaScript, Blade (depending on the implemented views)
- **Dependency Management:** Composer, npm
- **Development Tools:** Git, GitHub, Laravel Artisan

## 📋 Requirements

Make sure the following software is installed before running the project:

- PHP **8.2 or higher**
- Composer
- MySQL or SQLite
- Node.js and npm
- Git
- PHP extensions required by Laravel

## 📌 Project Version

| Component | Version |
|---|---|
| PHP | ^8.2 |
| Laravel Framework | ^12.0 |
| Laravel Sanctum | ^4.2 |
| Laravel Tinker | ^2.10.1 |
| Pest | ^4.3 (development) |

## 📥 Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/hassanroki/exam_week4.git
```

### 2. Navigate to the Project Directory

```bash
cd exam_week4
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Configure the Environment

Copy the example environment file:

**Windows (Command Prompt):**
```bash
copy .env.example .env
```

**Linux / macOS:**
```bash
cp .env.example .env
```

### 5. Generate the Application Key

```bash
php artisan key:generate
```

### 6. Configure the Database

Update the database settings in your `.env` file.

For MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

Create the database in MySQL before running the migrations.

### 7. Run Database Migrations

```bash
php artisan migrate
```

If the project includes seeders and you need sample data, run:

```bash
php artisan db:seed
```

### 8. Install Frontend Dependencies

If the project includes a `package.json` file:

```bash
npm install
```

Build the frontend assets:

```bash
npm run build
```

### 9. Start the Development Server

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## 🔗 API Endpoints

All versioned API endpoints use the `/api/v1` prefix.

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/v1/register` | Register a user |
| POST | `/api/v1/login` | Log in |
| POST | `/api/v1/logout` | Log out |
| GET | `/api/v1/dashboard/summary` | Dashboard summary |
| GET, POST | `/api/v1/categories` | List and create categories |
| GET, PUT, DELETE | `/api/v1/categories/{id}` | Manage a category |
| GET, POST | `/api/v1/products` | List and create products |
| GET, PUT, DELETE | `/api/v1/products/{id}` | Manage a product |
| GET, POST | `/api/v1/customers` | List and create customers |
| GET, PUT, DELETE | `/api/v1/customers/{id}` | Manage a customer |
| GET, POST | `/api/v1/stocks` | View stock and add stock |
| POST | `/api/v1/stocks/adjustment` | Adjust stock |
| GET, POST | `/api/v1/invoices` | List and create invoices |
| GET, PUT, DELETE | `/api/v1/invoices/{id}` | Manage an invoice |

**Note:** Protected API endpoints require valid authentication using Laravel Sanctum. The web dashboard uses the configured `token.auth` middleware.

## 🖥️ Web Routes

| Route | Description |
|---|---|
| `/login` | Login page |
| `/dashboard` | Dashboard |
| `/categories` | Category management |
| `/products` | Product management |
| `/customers` | Customer management |
| `/stocks` | Stock management |
| `/pos` | Point of Sale |
| `/invoices` | Invoice management |

## 🎥 Project Presentation Video

Watch the project presentation to learn more about the application:

[**Watch Project Presentation**](https://drive.google.com/file/d/1O3UNbMrE0vc9eK3PpQly2cbssRq92jpN/view?usp=sharing)

## 📂 GitHub Repository

**Repository:** [https://github.com/hassanroki/exam_week4.git](https://github.com/hassanroki/exam_week4.git)

## 👨‍💻 Developer

**Developed by:** Hassan

GitHub: [hassanroki](https://github.com/hassanroki)

---

*This project was developed to demonstrate Laravel application development, RESTful API design, authentication, CRUD operations, and inventory management.*
