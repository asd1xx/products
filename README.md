## [Product Catalog](https://github.com/asd1xx/products)

### About the project

Micro-framework (MVC), consisting of a Core (Application), a Router (Router), a Controller (Controller) and a Model (ModelInterface).  
Any visitor to the site can create his own temporary directory (storage time = session lifetime). Products are stored in a session.  
Site structure: list of products, product creation, removing a product

### System requirements

- Composer 2.6.6
- PHP 8.3

### Installation instructions

Perform the following steps in sequence:

1. Clone the repository:
    
    ```bash
    git@github.com:asd1xx/products.git product-catalog
    ```
    
2. Go to the project directory:
    
    ```bash
    cd product-catalog
    ```
    
3. Installing dependencies:
    
    ```bash
    composer install
    ```

4. Start a project:
    
    ```bash
    make start
    ```

5. Open in browser:
    
    ```bash
    http://localhost:8000
    ```

### Information about routes and methods

| Method  | Route              | Info                    |
|---------|--------------------|-------------------------|
| GET     | /                  | list of products        |
| GET     | /products/create   | product creation form   |
| POST    | /products          | create a product        |
| POST    | /products/delete   | remove product          |