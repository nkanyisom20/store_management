# Store Management System

A simple web-based **Store Management System** built with PHP and MySQL. The application helps manage products, inventory, suppliers, customers, purchases, orders, brands, and categories.

## Features

- User Login Authentication
- Dashboard/Home Page
- Product Management
- Inventory Management
- Brand Management
- Category Management
- Supplier Management
- Customer Management
- Purchase Management
- Order Management
- Menu Navigation
- MySQL Database Integration

## Project Structure

```
Store-Management-System/
│── action.php              # Handles CRUD operations
│── brand.php               # Brand management
│── category.php            # Category management
│── customer.php            # Customer management
│── index.php               # Dashboard/Home page
│── Inventory.php           # Inventory management
│── login.php               # User authentication
│── menus.php               # Navigation menu
│── order.php               # Order management
│── product.php             # Product management
│── purchase.php            # Purchase management
│── supplier.php            # Supplier management
│── store_management.sql    # Database file
```

## Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- Bootstrap (if applicable)

## Requirements

- PHP 7.x or later
- MySQL 5.7 or later
- Apache Server (XAMPP, WAMP, or LAMP)
- Web Browser

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/store-management-system.git
```

2. Move the project into your web server directory.

Example for XAMPP:

```
htdocs/store-management-system
```

3. Start **Apache** and **MySQL**.

4. Create a database named:

```
store_management
```

5. Import the database:

- Open phpMyAdmin
- Create the database
- Import `store_management.sql`

6. Update database credentials if needed.

Example:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "store_management";
```
## Demo Accounts

Use the following accounts to log in and explore the system.

### Administrator

| Email | Password |
|--------|----------|
| admin@gmail.com | 123 |

### User

| Email | Password |
|--------|----------|
| nqubeko@gmail.com | 123 |

> **Note:** These are demo credentials intended for testing and development purposes only. If deploying the application to a production environment, change the default passwords and create secure user accounts.
7. Open your browser:

```
http://localhost/store-management-system/
```

## Modules

- Login
- Products
- Inventory
- Brands
- Categories
- Customers
- Suppliers
- Purchases
- Orders

## Database

The database schema is included in:

```
store_management.sql
```

Import this file before running the application.

## Future Improvements

- Sales reports
- Dashboard analytics
- Barcode support
- Stock alerts
- User roles and permissions
- Export reports (PDF/Excel)
- Responsive UI improvements

## Author

Developed as a PHP & MySQL Store Management System project.

## License

This project is available for educational and learning purposes.
