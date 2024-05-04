CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    last_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone_number VARCHAR(20),
    role ENUM ('user', 'admin', 'master') DEFAULT 'user',
    avatar_url VARCHAR(255) DEFAULT '/storage/images/users/default_avatar.jpg',
    is_active BOOLEAN DEFAULT true,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE product_colors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE product_sizes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    size_name VARCHAR(20) NOT NULL,
    standardized_size VARCHAR(20),
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE product_images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    is_main_image BOOLEAN DEFAULT false,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    category_id INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    stock_quantity INT DEFAULT 0,
    color_id INT,
    size_id INT,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (color_id) REFERENCES product_colors(id),
    FOREIGN KEY (size_id) REFERENCES product_sizes(id)
);

CREATE TABLE cart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    date_added TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_details (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE coupons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    coupon_code VARCHAR(20) UNIQUE NOT NULL,
    discount DECIMAL(5, 2) NOT NULL,
    start_date TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP),
    expiration_date TIMESTAMP,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE INDEX users_index_0 ON users (email);

CREATE INDEX users_index_1 ON users (username);

CREATE INDEX categories_index_2 ON categories (category_name);

CREATE INDEX product_colors_index_3 ON product_colors (color_name);

CREATE INDEX product_sizes_index_4 ON product_sizes (size_name);

CREATE INDEX product_sizes_index_5 ON product_sizes (standardized_size);

CREATE INDEX product_images_index_6 ON product_images (product_id);

CREATE INDEX products_index_7 ON products (category_id);

CREATE INDEX products_index_8 ON products (color_id);

CREATE INDEX products_index_9 ON products (size_id);

CREATE INDEX cart_index_10 ON cart (user_id);

CREATE INDEX cart_index_11 ON cart (product_id);

CREATE INDEX orders_index_12 ON orders (user_id, order_date);

CREATE INDEX order_details_index_13 ON order_details (order_id);

CREATE INDEX order_details_index_14 ON order_details (product_id);

CREATE INDEX coupons_index_15 ON coupons (coupon_code);

-- Add foreign key constraints using ALTER TABLE statements
ALTER TABLE
    product_images
ADD
    FOREIGN KEY (product_id) REFERENCES products(id);

ALTER TABLE
    products
ADD
    FOREIGN KEY (category_id) REFERENCES categories(id);

ALTER TABLE
    products
ADD
    FOREIGN KEY (color_id) REFERENCES product_colors(id);

ALTER TABLE
    products
ADD
    FOREIGN KEY (size_id) REFERENCES product_sizes(id);

ALTER TABLE
    cart
ADD
    FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE
    cart
ADD
    FOREIGN KEY (product_id) REFERENCES products(id);

ALTER TABLE
    orders
ADD
    FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE
    order_details
ADD
    FOREIGN KEY (order_id) REFERENCES orders(id);

ALTER TABLE
    order_details
ADD
    FOREIGN KEY (product_id) REFERENCES products(id);