# Role Matrix

## Purpose

This document defines the responsibilities and access levels of every user role in the Inventory Management System.

---

# System Roles

## 1. Admin

### Description

Full system administrator.

Responsible for managing the complete Inventory Management System.

### Access

- Dashboard
- Category Management
- Product Management
- Supplier Management
- Customer Management
- Purchase Management
- Sales Management
- Customer Payments
- Reports
- User Management
- Role Management
- Permission Management
- Activity Logs

### Permissions

All Permissions

---

## 2. Manager

### Description

Branch or Store Manager.

Responsible for daily business operations.

### Access

- Dashboard
- Categories
- Products
- Suppliers
- Customers
- Purchases
- Sales
- Customer Payments
- Reports

### Restrictions

Cannot:

- Manage Users
- Manage Roles
- Assign Permissions
- View Activity Logs

---

## 3. Employee

### Description

Sales or Inventory Employee.

Responsible for day-to-day operational work.

### Access

Dashboard

Can View

- Categories
- Products
- Suppliers
- Customers

Can Create

- Purchases
- Sales
- Customer Payments

### Restrictions

Cannot

- Delete Records
- Manage Users
- Manage Roles
- Assign Permissions
- Edit System Settings
- View Activity Logs

---

# Role Hierarchy

```
Admin
│
├── Manager
│
└── Employee
```

---

# Future Expansion

The system architecture supports adding new roles without changing the existing permission structure.

Examples:

- Accountant
- Cashier
- Warehouse Staff
- Branch Manager
- Regional Manager

Each new role should receive permissions through the Permission Matrix rather than modifying application logic.

---

# Security Principle

Authorization should always be permission-based.

Preferred:

```php
$user->can('product.create');
```

Avoid:

```php
$user->hasRole('Admin');
```

Role checks should only be used for high-level administrative decisions.

Policies and Middleware should always rely on permissions wherever possible.

---

# Development Notes

- Roles are created through RoleSeeder.
- Permissions are created through PermissionSeeder.
- Roles receive permissions during database seeding.
- Users receive roles through AdminUserSeeder or User Management.