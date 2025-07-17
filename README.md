# Nal's Nails

A web-based appointment booking system for a nail salon, built with PHP, MariaDB, and Bootstrap.

## Features
- Book nail appointments online
- Responsive design with Bootstrap
- Stores customer, appointment, and service data in MariaDB
- Confirmation and cancellation pages
- Contact and informational pages

## Tech Stack
- **Frontend:** HTML, CSS, Bootstrap 5
- **Backend:** PHP
- **Database:** MariaDB (or MySQL)

## Getting Started

### Prerequisites
- PHP 7.4 or higher
- MariaDB or MySQL
- Composer (optional, for dependency management)

### Setup Instructions

1. **Clone the repository:**
   ```sh
   git clone <https://github.com/LisaComments/nalsnails>
   cd nalsnails
   ```

2. **Set up the database:**
   - Create a MariaDB database (e.g., `nn_booking`).
   - Create the required tables (`Customer`, `Appointment`, `Service`, `Employee`).
   - (See below for example schema.)

3. **Configure database connection:**
   - Edit `database.php` with your local database credentials.
   - For Heroku/ClearDB, ensure the `CLEARDB_DATABASE_URL` environment variable is set.

4. **Run the PHP server locally:**
   ```sh
   php -S localhost:8000
   ```
   Then open [http://localhost:8000](http://localhost:8000) in your browser.

## Example Database Schema

```
CREATE TABLE Customer (
  customerID INT AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(50),
  lastName VARCHAR(50),
  email VARCHAR(100),
  phone VARCHAR(20)
);

CREATE TABLE Employee (
  employeeID INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50)
);

CREATE TABLE Appointment (
  appointmentID INT AUTO_INCREMENT PRIMARY KEY,
  date DATE,
  time TIME,
  comments TEXT,
  customerID INT,
  employeeID INT,
  FOREIGN KEY (customerID) REFERENCES Customer(customerID),
  FOREIGN KEY (employeeID) REFERENCES Employee(employeeID)
);

CREATE TABLE Service (
  serviceID INT AUTO_INCREMENT PRIMARY KEY,
  serviceType VARCHAR(50),
  price DECIMAL(10,2)
);
```

## Deployment
- Can be deployed to any PHP-compatible host (shared hosting, VPS, etc.)
- For Heroku: use ClearDB add-on for MySQL/MariaDB and set environment variables accordingly.
- For Vercel: use serverless PHP or deploy as a static site with backend API.

## Customization
- Update `index.css` for custom styles.
- Edit HTML/PHP files to change content or add features.
