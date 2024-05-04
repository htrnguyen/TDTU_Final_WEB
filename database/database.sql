-- Create the shoe_store database if it doesn't exist
CREATE DATABASE IF NOT EXISTS shoe_store;

-- Use the shoe_store database
USE shoe_store;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    last_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    -- Store hashed password using a secure algorithm
    address VARCHAR(255),
    phone_number VARCHAR(20),
    role ENUM('user', 'admin', 'master') DEFAULT 'user',
    avatar_url VARCHAR(255) DEFAULT '/storage/images/users/default_avatar.jpg',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX(email),
    INDEX(username)
);

-- Categories Table
CREATE TABLE IF NOT EXISTS categories (
    category_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX (category_name)
);

-- Colors Table
CREATE TABLE IF NOT EXISTS product_colors (
    color_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX (color_name)
);

-- Sizes Table
CREATE TABLE IF NOT EXISTS product_sizes (
    size_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    size_name VARCHAR(20) NOT NULL,
    standardized_size VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX (size_name),
    INDEX (standardized_size)
);

-- Product Images Table
CREATE TABLE IF NOT EXISTS product_images (
    image_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    product_id INT UNSIGNED NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    is_main_image BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    INDEX (product_id)
);

-- Products Table
CREATE TABLE IF NOT EXISTS products (
    product_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    category_id INT UNSIGNED NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    stock_quantity INT UNSIGNED DEFAULT 0,
    color_id INT UNSIGNED,
    size_id INT UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(category_id),
    FOREIGN KEY (color_id) REFERENCES product_colors(color_id),
    FOREIGN KEY (size_id) REFERENCES product_sizes(size_id),
    INDEX(category_id),
    INDEX(color_id),
    INDEX(size_id)
);

-- Cart Table
CREATE TABLE IF NOT EXISTS cart (
    cart_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    product_id INT UNSIGNED NOT NULL,
    quantity INT UNSIGNED NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    INDEX(user_id),
    INDEX(product_id)
);

-- Orders Table
CREATE TABLE IF NOT EXISTS orders (
    order_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    INDEX(user_id, order_date)
);

-- Order Details Table
CREATE TABLE IF NOT EXISTS order_details (
    order_detail_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    order_id INT UNSIGNED NOT NULL,
    product_id INT UNSIGNED NOT NULL,
    quantity INT UNSIGNED NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    INDEX(order_id),
    INDEX(product_id)
);

-- Coupons Table
CREATE TABLE IF NOT EXISTS coupons (
    coupon_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    coupon_code VARCHAR(20) NOT NULL UNIQUE,
    discount DECIMAL(5, 2) NOT NULL,
    start_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    expiration_date TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX(coupon_code),
    CHECK (
        discount >= 0
        AND discount <= 100
    ),
    CHECK (
        start_date <= expiration_date
        OR expiration_date IS NULL
    )
);