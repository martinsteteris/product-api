# Product API (Laravel)

This is a simple backend application built with Laravel that provides an API for managing products.


---

## Getting Started

### Prerequisites

Make sure you have the following installed on your system:

- PHP (version 8.1 or higher)
- Composer (for installing Laravel dependencies)
- MySQL Database

### Installation

1. Clone this repository to your local machine:

`git clone https://github.com/martinsteteris/product-api.git`


2. Install Laravel dependencies:

`cd product-api`

`composer install`

3. Configure your database connection in .env file


## Usage

### Running the Application

To start the Laravel server, run:

`php artisan serve`


The server will start on `http://localhost:8000` by default.

### API Endpoints

#### Get All Products
`GET /products`

#### Show Product
`GET /products/{$id}`

#### Create Product
`POST /products`

#### Update Product
`PUT /products/{$id}`

#### Delete Product
`DELETE /products/{$id}`

