-- Create the shoe_store database if it doesn't exist
CREATE DATABASE IF NOT EXISTS shoe_store;

-- Use the shoe_store database
USE shoe_store;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX(email)
);

-- Create the categories table
CREATE TABLE IF NOT EXISTS categories (
    category_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(100),
    INDEX(category_name)
);

-- Create the products table
CREATE TABLE IF NOT EXISTS products (
    product_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(100),
    category_id INT UNSIGNED,
    price DECIMAL(10, 2),
    description TEXT,
    FOREIGN KEY (category_id) REFERENCES categories(category_id),
    INDEX(category_id)
);

-- Create the orders table
CREATE TABLE IF NOT EXISTS orders (
    order_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    INDEX(user_id)
);

-- Create the order_details table
CREATE TABLE IF NOT EXISTS order_details (
    order_detail_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    order_id INT UNSIGNED,
    product_id INT UNSIGNED,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    INDEX(order_id),
    INDEX(product_id)
);

-- Create the coupons table
CREATE TABLE IF NOT EXISTS coupons (
    coupon_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    coupon_code VARCHAR(20),
    discount DECIMAL(5, 2),
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expiration_date TIMESTAMP,
    INDEX(coupon_code)
);
