# Cakephp Clinical

Cake framework with complete Clinic Management System CRUD

## Requirements

* WAMP
  - Php 7.2
  - Apache 2.4
  - MySQL 5.7
* Composer

## Installation
* git clone repo
* cd repo

## Database
create database 'cake_clinical'

| Tabla | Campos |
| ------------- |------------- |
| appointments  | id, doctor_id, patient_id, appointment_date, created   |
| carriers  | id, name, carrier_code, created  |
| doctors  | id, name, 	accepting_patiens, created   |
| invoices  | id, patien_id, amount, service, due, created  |
| patients  | id, carrier_id, name, address, city, phone, zipcode, created  |
| users  | id, name, email, passwordm created  |

### app_local
```
'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'cake_clinical',
            'log' => true,
            'url' => env('DATABASE_URL', null),
        ],
```
