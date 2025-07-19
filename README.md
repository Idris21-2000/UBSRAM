UBSRAM is the short form for USSD-Based System for Renting Angricultural Machines.
# USSD-Based System for Renting Agricultural Machines

A Laravel-powered backend system that enables farmers to rent agricultural machinery through a simple USSD interface. The platform bridges the technological gap in rural communities by offering an accessible and cost-effective way for farmers to request, pay for, and track the use of machines — all without requiring internet access.

## 🌾 Overview

This system allows:
- **Farmers** to register, browse available machines, request rentals, verify payments, view history, and rate completed jobs.
- **Operators** to log in, accept or decline job assignments, and report job status (start/end).
- **Admin/Office users** to manage users, machines, payments, and assign operators via a web interface.

USSD functionality is integrated with Africa’s Talking API for real-time interaction.

## 📱 USSD Features

### Farmer Options:
1. **Browse Machines** – View available equipment by type, condition, and rental cost.
2. **Request Rental** – Select equipment, duration, and receive rental summary.
3. **Verify Payment** – Submit a transaction ID for admin verification.
4. **Payment History** – View all rental requests with payment status.
5. **Rate Completed Job** – Rate operator performance after job completion.

### Operator Options:
1. **Requested Jobs** – Accept or deny job offers assigned by admins.
2. **Job Reporting** – Report job start and end times.
3. **Jobs History** – (Placeholder for future feature).

## ⚙️ System Features

- Role-based access: Admins, Farmers, Operators
- Machine Management (type, condition, cost/hour)
- Rental Request Lifecycle (Requested → Awaiting Payment → Verified → In Progress → Completed)
- Payment Verification Workflow
- SMS notifications in Swahili upon operator acceptance
- Floating UI cards for verification and details (for office users)
- Operator assignment and job tracking
- Responsive Bootstrap-styled web interface

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade, Bootstrap 5, Custom CSS, JavaScript
- **Database:** MySQL
- **USSD Gateway:** Africa's Talking
- **Hosting:** Render (Docker-based deployment)

## 🗃️ Database Structure (Key Tables)

- `users` – With roles: Farmer, Operator, Admin
- `machines` – Contains type, condition, cost per hour, and optional operator
- `rental_requests` – Tracks rental data, status, duration, assigned operator, and rating
- `payments` – Stores payment details linked to rental requests
- `rental_jobs` – Tracks job start and end for operators

## 🚀 Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL
- Laravel CLI
- Africa’s Talking account (for USSD integration)

### Installation

```bash
git clone https://github.com/yourusername/ussd-agri-machines.git
cd ussd-agri-machines
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

