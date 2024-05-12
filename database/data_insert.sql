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
    color VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE product_sizes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    size VARCHAR(20) NOT NULL,
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
);

CREATE TABLE cart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    date_added TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
);

CREATE TABLE order_details (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
);

CREATE TABLE coupons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    coupon_code VARCHAR(20) UNIQUE NOT NULL,
    discount DECIMAL(5, 2) NOT NULL,
    start_date TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP),
    expiration_date TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    created_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
    updated_at TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

-- Insert data into the tables
-- Insert data into the categories table
INSERT INTO
    categories (category_name)
VALUES
    ('Men'),
    ('Women'),
    ('Kids');

-- Insert data into the product_sizes table
INSERT INTO
    product_colors (color)
VALUES
    ('Black'),
    ('White'),
    ('Red'),
    ('Blue'),
    ('Green'),
    ('Yellow');

-- Insert data into the product_sizes table
INSERT INTO
    product_sizes (size)
VALUES
    ('US 3'), -- UK 2.5, EU 35
    ('US 4'), -- UK 3.5, EU 36
    ('US 5'), -- UK 4.5, EU 37
    ('US 6'), -- UK 5.5, EU 38
    ('US 7'), -- UK 6.5, EU 39
    ('US 8'), -- UK 7.5, EU 40
    ('US 9'), -- UK 8.5, EU 41
    ('US 10'), -- UK 9.5, EU 42
    ('US 11'), -- UK 10.5, EU 43
    ('US 12'), -- UK 11.5, EU 44
    ('US 13'), -- UK 12.5, EU 45
    ('US 14'), -- UK 13.5, EU 46
    ('US 15'), -- UK 14.5, EU 47
    ('US 16'), -- UK 15.5, EU 48;

-- Insert data into the products table
-- -- Men's shoes
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 1, 3),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 2, 4),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 1, 3),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 2, 4),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 3, 5),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 4, 3),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 5, 6),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 6, 4),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 1, 5),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 2, 6),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 3, 3),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 4, 4),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 5, 5),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 6, 6),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 1, 3);

-- Women's shoes
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 3, 5),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 4, 6),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 1, 4),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 2, 5),
('Skechers DLites', 2, 50.00, 'Chunky sneakers', 30, 5, 3),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 6, 4),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 1, 5),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 2, 6),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 3, 4),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 4, 5),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 5, 6),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 6, 3),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 1, 4),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 2, 5),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 3, 6);

-- Kids' shoes
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 5, 1),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 6, 2),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 1, 1),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 2, 2),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 3, 1),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 4, 2),
('Skechers Kids Lightstorm', 3, 55.00, 'Light-up shoes', 15, 5, 1),
('Under Armour Kids Assert 8', 3, 60.00, 'Light and breathable', 30, 6, 2),
('Brooks Kids Ghost 12', 3, 70.00, 'Soft and secure', 20, 1, 1),
('Asics Kids GT-1000', 3, 65.00, 'Supportive', 25, 2, 2),
('Hoka One One Kids', 3, 75.00, 'Cushioned ride', 15, 3, 1),
('New Balance Kids 860v10', 3, 50.00, 'Reliable stability', 30, 4, 2),
('Saucony Kids Ride ISO 2', 3, 45.00, 'All-day comfort', 25, 5, 1),
('Merrell Kids Trail Chaser', 3, 55.00, 'Rugged outsole', 20, 6, 2),
('Altra Kids One Jr', 3, 60.00, 'Foot-shaped', 15, 1, 1);


-- Men's shoes
-- Nike Air Max variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 1, 3),
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 1, 4),
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 1, 5),
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 2, 3),
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 2, 4),
('Nike Air Max', 1, 110.00, 'Comfortable and stylish', 20, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(1, '/storage/images/products/nike_air_max_1.jpg', true),
(1, '/storage/images/products/nike_air_max_2.jpg', false),
(1, '/storage/images/products/nike_air_max_3.jpg', false),
(1, '/storage/images/products/nike_air_max_4.jpg', false);

-- Adidas Samba variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Adidas Samba', 1, 85.00, 'Classic design', 15, 3, 3),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 3, 4),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 3, 5),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 4, 3),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 4, 4),
('Adidas Samba', 1, 85.00, 'Classic design', 15, 4, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(2, '/storage/images/products/adidas_samba_1.jpg', true),
(2, '/storage/images/products/adidas_samba_2.jpg', false),
(2, '/storage/images/products/adidas_samba_3.jpg', false),
(2, '/storage/images/products/adidas_samba_4.jpg', false);

-- Jordan B. Fly variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 5, 3),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 5, 4),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 5, 5),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 6, 3),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 6, 4),
('Jordan B. Fly', 1, 100.00, 'Basketball shoes', 18, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(3, '/storage/images/products/jordan_b_fly_1.jpg', true),
(3, '/storage/images/products/jordan_b_fly_2.jpg', false),
(3, '/storage/images/products/jordan_b_fly_3.jpg', false),
(3, '/storage/images/products/jordan_b_fly_4.jpg', false);

-- Under Armour Curry 7 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 1, 3),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 1, 4),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 1, 5),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 2, 3),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 2, 4),
('Under Armour Curry 7', 1, 130.00, 'For aspiring sharpshooters', 22, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(4, '/storage/images/products/under_armour_curry_7_1.jpg', true),
(4, '/storage/images/products/under_armour_curry_7_2.jpg', false),
(4, '/storage/images/products/under_armour_curry_7_3.jpg', false),
(4, '/storage/images/products/under_armour_curry_7_4.jpg', false);

-- New Balance Runners variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 3, 3),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 3, 4),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 3, 5),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 4, 3),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 4, 4),
('New Balance Runners', 1, 90.00, 'Best for long distances', 20, 4, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(5, '/storage/images/products/new_balance_runners_1.jpg', true),
(5, '/storage/images/products/new_balance_runners_2.jpg', false),
(5, '/storage/images/products/new_balance_runners_3.jpg', false),
(5, '/storage/images/products/new_balance_runners_4.jpg', false);

-- Brooks Ghost variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 5, 3),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 5, 4),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 5, 5),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 6, 3),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 6, 4),
('Brooks Ghost', 1, 120.00, 'Soft and balanced cushioning', 25, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(6, '/storage/images/products/brooks_ghost_1.jpg', true),
(6, '/storage/images/products/brooks_ghost_2.jpg', false),
(6, '/storage/images/products/brooks_ghost_3.jpg', false),
(6, '/storage/images/products/brooks_ghost_4.jpg', false);

-- Asics Gel-Kayano variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 1, 3),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 1, 4),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 1, 5),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 2, 3),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 2, 4),
('Asics Gel-Kayano', 1, 160.00, 'High-mileage stability shoe', 30, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(7, '/storage/images/products/asics_gel_kayano_1.jpg', true),
(7, '/storage/images/products/asics_gel_kayano_2.jpg', false),
(7, '/storage/images/products/asics_gel_kayano_3.jpg', false),
(7, '/storage/images/products/asics_gel_kayano_4.jpg', false);

-- Reebok Print Run variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 3, 3),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 3, 4),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 3, 5),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 4, 3),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 4, 4),
('Reebok Print Run', 1, 80.00, 'Comfort and performance', 15, 4, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(8, '/storage/images/products/reebok_print_run_1.jpg', true),
(8, '/storage/images/products/reebok_print_run_2.jpg', false),
(8, '/storage/images/products/reebok_print_run_3.jpg', false),
(8, '/storage/images/products/reebok_print_run_4.jpg', false);

-- Adidas ZX Flux variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 5, 3),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 5, 4),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 5, 5),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 6, 3),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 6, 4),
('Adidas ZX Flux', 1, 70.00, 'Iconic running style', 20, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(9, '/storage/images/products/adidas_zx_flux_1.jpg', true),
(9, '/storage/images/products/adidas_zx_flux_2.jpg', false),
(9, '/storage/images/products/adidas_zx_flux_3.jpg', false),
(9, '/storage/images/products/adidas_zx_flux_4.jpg', false);

-- Nike React Miler variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 1, 3),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 1, 4),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 1, 5),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 2, 3),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 2, 4),
('Nike React Miler', 1, 115.00, 'Durable and dependable', 22, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(10, '/storage/images/products/nike_react_miler_1.jpg', true),
(10, '/storage/images/products/nike_react_miler_2.jpg', false),
(10, '/storage/images/products/nike_react_miler_3.jpg', false),
(10, '/storage/images/products/nike_react_miler_4.jpg', false);

-- Puma Ignite variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 3, 3),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 3, 4),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 3, 5),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 4, 3),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 4, 4),
('Puma Ignite', 1, 110.00, 'Responsive running shoes', 18, 4, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(11, '/storage/images/products/puma_ignite_1.jpg', true),
(11, '/storage/images/products/puma_ignite_2.jpg', false),
(11, '/storage/images/products/puma_ignite_3.jpg', false),
(11, '/storage/images/products/puma_ignite_4.jpg', false);

-- Saucony Guide 13 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 5, 3),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 5, 4),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 5, 5),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 6, 3),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 6, 4),
('Saucony Guide 13', 1, 135.00, 'Medial support for runners', 24, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(12, '/storage/images/products/saucony_guide_13_1.jpg', true),
(12, '/storage/images/products/saucony_guide_13_2.jpg', false),
(12, '/storage/images/products/saucony_guide_13_3.jpg', false),
(12, '/storage/images/products/saucony_guide_13_4.jpg', false);

-- Hoka One One Bondi 6 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 1, 3),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 1, 4),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 1, 5),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 2, 3),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 2, 4),
('Hoka One One Bondi 6', 1, 150.00, 'Maximum cushioning', 20, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(13, '/storage/images/products/hoka_one_one_bondi_6_1.jpg', true),
(13, '/storage/images/products/hoka_one_one_bondi_6_2.jpg', false),
(13, '/storage/images/products/hoka_one_one_bondi_6_3.jpg', false),
(13, '/storage/images/products/hoka_one_one_bondi_6_4.jpg', false);

-- La Sportiva Bushido II variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 3, 3),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 3, 4),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 3, 5),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 4, 3),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 4, 4),
('La Sportiva Bushido II', 1, 130.00, 'Technical trail running', 18, 4, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(14, '/storage/images/products/la_sportiva_bushido_2_1.jpg', true),
(14, '/storage/images/products/la_sportiva_bushido_2_2.jpg', false),
(14, '/storage/images/products/la_sportiva_bushido_2_3.jpg', false),
(14, '/storage/images/products/la_sportiva_bushido_2_4.jpg', false);

-- Mizuno Wave Inspire 16 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 5, 3),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 5, 4),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 5, 5),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 6, 3),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 6, 4),
('Mizuno Wave Inspire 16', 1, 135.00, 'Smooth ride', 22, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(15, '/storage/images/products/mizuno_wave_inspire_16_1.jpg', true),
(15, '/storage/images/products/mizuno_wave_inspire_16_2.jpg', false),
(15, '/storage/images/products/mizuno_wave_inspire_16_3.jpg', false),
(15, '/storage/images/products/mizuno_wave_inspire_16_4.jpg', false);
-- 
-- Women's shoes
-- 
-- Puma Cali variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 1, 5),
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 1, 6),
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 2, 5),
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 2, 6),
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 3, 5),
('Puma Cali', 2, 75.00, 'Casual sneakers', 20, 3, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(16, '/storage/images/products/puma_cali_1.jpg', true),
(16, '/storage/images/products/puma_cali_2.jpg', false),
(16, '/storage/images/products/puma_cali_3.jpg', false),
(16, '/storage/images/products/puma_cali_4.jpg', false);

-- Reebok Classic variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Reebok Classic', 2, 65.00, 'Retro style', 25, 4, 6),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 4, 7),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 5, 6),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 5, 7),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 6, 6),
('Reebok Classic', 2, 65.00, 'Retro style', 25, 6, 7);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(17, '/storage/images/products/reebok_classic_1.jpg', true),
(17, '/storage/images/products/reebok_classic_2.jpg', false),
(17, '/storage/images/products/reebok_classic_3.jpg', false),
(17, '/storage/images/products/reebok_classic_4.jpg', false);

-- Nike Flex 2021 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 1, 4),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 1, 5),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 2, 4),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 2, 5),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 3, 4),
('Nike Flex 2021', 2, 85.00, 'Versatile and comfortable', 20, 3, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(18, '/storage/images/products/nike_flex_2021_1.jpg', true),
(18, '/storage/images/products/nike_flex_2021_2.jpg', false),
(18, '/storage/images/products/nike_flex_2021_3.jpg', false),
(18, '/storage/images/products/nike_flex_2021_4.jpg', false);

-- Adidas Cloudfoam variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 4, 5),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 4, 6),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 5, 5),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 5, 6),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 6, 5),
('Adidas Cloudfoam', 2, 70.00, 'Super soft cloud foam', 18, 6, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(19, '/storage/images/products/adidas_cloudfoam_1.jpg', true),
(19, '/storage/images/products/adidas_cloudfoam_2.jpg', false),
(19, '/storage/images/products/adidas_cloudfoam_3.jpg', false),
(19, '/storage/images/products/adidas_cloudfoam_4.jpg', false);

-- Skechers D'Lites variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 5, 3),
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 5, 4),
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 6, 3),
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 6, 4),
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 1, 3),
('Skechers D\'Lites', 2, 50.00, 'Chunky sneakers', 30, 1, 4);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(20, '/storage/images/products/skechers_dlites_1.jpg', true),
(20, '/storage/images/products/skechers_dlites_2.jpg', false),
(20, '/storage/images/products/skechers_dlites_3.jpg', false),
(20, '/storage/images/products/skechers_dlites_4.jpg', false);

-- Asics Gel-Venture variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 6, 4),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 6, 5),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 1, 4),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 1, 5),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 2, 4),
('Asics Gel-Venture', 2, 60.00, 'Trail ready', 25, 2, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(21, '/storage/images/products/asics_gel_venture_1.jpg', true),
(21, '/storage/images/products/asics_gel_venture_2.jpg', false),
(21, '/storage/images/products/asics_gel_venture_3.jpg', false),
(21, '/storage/images/products/asics_gel_venture_4.jpg', false);

-- Salomon Speedcross variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 3, 5),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 3, 6),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 4, 5),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 4, 6),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 5, 5),
('Salomon Speedcross', 2, 120.00, 'Aggressive grip', 22, 5, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(22, '/storage/images/products/salomon_speedcross_1.jpg', true),
(22, '/storage/images/products/salomon_speedcross_2.jpg', false),
(22, '/storage/images/products/salomon_speedcross_3.jpg', false),
(22, '/storage/images/products/salomon_speedcross_4.jpg', false);

-- Merrell Trail Glove variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 1, 6),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 1, 7),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 2, 6),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 2, 7),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 3, 6),
('Merrell Trail Glove', 2, 100.00, 'Minimalist trail shoe', 20, 3, 7);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(23, '/storage/images/products/merrell_trail_glove_1.jpg', true),
(23, '/storage/images/products/merrell_trail_glove_2.jpg', false),
(23, '/storage/images/products/merrell_trail_glove_3.jpg', false),
(23, '/storage/images/products/merrell_trail_glove_4.jpg', false);

-- Brooks Adrenaline GTS variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 4, 4),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 4, 5),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 5, 4),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 5, 5),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 6, 4),
('Brooks Adrenaline GTS', 2, 125.00, 'Reliable and cushioned', 18, 6, 5);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(24, '/storage/images/products/brooks_adrenaline_gts_1.jpg', true),
(24, '/storage/images/products/brooks_adrenaline_gts_2.jpg', false),
(24, '/storage/images/products/brooks_adrenaline_gts_3.jpg', false),
(24, '/storage/images/products/brooks_adrenaline_gts_4.jpg', false);

-- Hoka Clifton 7 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 1, 5),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 1, 6),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 2, 5),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 2, 6),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 3, 5),
('Hoka Clifton 7', 2, 130.00, 'Lightweight comfort', 15, 3, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(25, '/storage/images/products/hoka_clifton_7_1.jpg', true),
(25, '/storage/images/products/hoka_clifton_7_2.jpg', false),
(25, '/storage/images/products/hoka_clifton_7_3.jpg', false),
(25, '/storage/images/products/hoka_clifton_7_4.jpg', false);

-- New Balance Fresh Foam variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 2, 6),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 2, 7),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 3, 6),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 3, 7),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 4, 6),
('New Balance Fresh Foam', 2, 90.00, 'Plush and stable', 25, 4, 7);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(26, '/storage/images/products/new_balance_fresh_foam_1.jpg', true),
(26, '/storage/images/products/new_balance_fresh_foam_2.jpg', false),
(26, '/storage/images/products/new_balance_fresh_foam_3.jpg', false),
(26, '/storage/images/products/new_balance_fresh_foam_4.jpg', false);

-- Altra Torin 4.5 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 3, 5),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 3, 6),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 4, 5),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 4, 6),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 5, 5),
('Altra Torin 4.5', 2, 140.00, 'Balanced cushioning', 20, 5, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(27, '/storage/images/products/altra_torin_4.5_1.jpg', true),
(27, '/storage/images/products/altra_torin_4.5_2.jpg', false),
(27, '/storage/images/products/altra_torin_4.5_3.jpg', false),
(27, '/storage/images/products/altra_torin_4.5_4.jpg', false);

-- Saucony Peregrine 10 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 4, 6),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 4, 7),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 5, 6),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 5, 7),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 6, 6),
('Saucony Peregrine 10', 2, 120.00, 'Rugged terrain', 22, 6, 7);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(28, '/storage/images/products/saucony_peregrine_10_1.jpg', true),
(28, '/storage/images/products/saucony_peregrine_10_2.jpg', false),
(28, '/storage/images/products/saucony_peregrine_10_3.jpg', false),
(28, '/storage/images/products/saucony_peregrine_10_4.jpg', false);

-- Under Armour Hovr Sonic 3 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 1, 5),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 1, 6),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 2, 5),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 2, 6),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 3, 5),
('Under Armour Hovr Sonic 3', 2, 110.00, 'Energy return', 20, 3, 6);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(29, '/storage/images/products/under_armour_hovr_sonic_3_1.jpg', true),
(29, '/storage/images/products/under_armour_hovr_sonic_3_2.jpg', false),
(29, '/storage/images/products/under_armour_hovr_sonic_3_3.jpg', false),
(29, '/storage/images/products/under_armour_hovr_sonic_3_4.jpg', false);

-- Vibram FiveFingers variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 2, 6),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 2, 7),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 3, 6),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 3, 7),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 4, 6),
('Vibram FiveFingers', 2, 130.00, 'Foot-shaped shoes', 18, 4, 7);
-- 
-- Kids' shoes
-- 
-- Vans Kids variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 5, 1),
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 5, 2),
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 6, 1),
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 6, 2),
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 1, 1),
('Vans Kids', 3, 45.00, 'Durable skate shoes', 30, 1, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(30, '/storage/images/products/vans_kids_1.jpg', true),
(30, '/storage/images/products/vans_kids_2.jpg', false),
(30, '/storage/images/products/vans_kids_3.jpg', false),
(30, '/storage/images/products/vans_kids_4.jpg', false),

-- Converse All-Star Kids variations
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 6, 2),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 6, 3),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 1, 2),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 1, 3),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 2, 2),
('Converse All-Star Kids', 3, 50.00, 'Iconic high-tops', 25, 2, 3);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(31, '/storage/images/products/converse_all_star_kids_1.jpg', true),
(31, '/storage/images/products/converse_all_star_kids_2.jpg', false),
(31, '/storage/images/products/converse_all_star_kids_3.jpg', false),
(31, '/storage/images/products/converse_all_star_kids_4.jpg', false);

-- Nike Kids Revolution variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 1, 1),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 1, 2),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 2, 1),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 2, 2),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 3, 1),
('Nike Kids Revolution', 3, 40.00, 'Everyday comfort', 20, 3, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(32, '/storage/images/products/nike_kids_revolution_1.jpg', true),
(32, '/storage/images/products/nike_kids_revolution_2.jpg', false),
(32, '/storage/images/products/nike_kids_revolution_3.jpg', false),
(32, '/storage/images/products/nike_kids_revolution_4.jpg', false);

-- Adidas Kids Duramo variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 2, 2),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 2, 3),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 3, 2),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 3, 3),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 4, 2),
('Adidas Kids Duramo', 3, 35.00, 'Playground ready', 30, 4, 3);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(33, '/storage/images/products/adidas_kids_duramo_1.jpg', true),
(33, '/storage/images/products/adidas_kids_duramo_2.jpg', false),
(33, '/storage/images/products/adidas_kids_duramo_3.jpg', false),
(33, '/storage/images/products/adidas_kids_duramo_4.jpg', false);

-- Reebok Kids Road Supreme variations  
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 3, 1),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 3, 2),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 4, 1),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 4, 2),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 5, 1),
('Reebok Kids Road Supreme', 3, 30.00, 'Versatile sneakers', 25, 5, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(34, '/storage/images/products/reebok_kids_road_supreme_1.jpg', true),
(34, '/storage/images/products/reebok_kids_road_supreme_2.jpg', false),
(34, '/storage/images/products/reebok_kids_road_supreme_3.jpg', false),
(34, '/storage/images/products/reebok_kids_road_supreme_4.jpg', false);

-- Puma Kids Carina variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 4, 2),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 4, 3),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 5, 2),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 5, 3),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 6, 2),
('Puma Kids Carina', 3, 45.00, 'Stylish and sporty', 20, 6, 3);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(35, '/storage/images/products/puma_kids_carina_1.jpg', true),
(35, '/storage/images/products/puma_kids_carina_2.jpg', false),
(35, '/storage/images/products/puma_kids_carina_3.jpg', false),
(35, '/storage/images/products/puma_kids_carina_4.jpg', false);

-- Skechers Kids Lightstorm variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 1, 1),
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 1, 2),
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 2, 1),
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 2, 2),
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 3, 1),
('Skechers Kids Lightstorm', 3, 50.00, 'Light-up sneakers', 30, 3, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(36, '/storage/images/products/skechers_kids_lightstorm_1.jpg', true),
(36, '/storage/images/products/skechers_kids_lightstorm_2.jpg', false),
(36, '/storage/images/products/skechers_kids_lightstorm_3.jpg', false),
(36, '/storage/images/products/skechers_kids_lightstorm_4.jpg', false);

-- Under Armour Kids Assert variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 2, 1),
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 2, 2),
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 3, 1),
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 3, 2),
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 4, 1),
('Under Armour Kids Assert', 3, 40.00, 'Supportive and comfortable', 25, 4, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(37, '/storage/images/products/under_armour_kids_assert_1.jpg', true),
(37, '/storage/images/products/under_armour_kids_assert_2.jpg', false),
(37, '/storage/images/products/under_armour_kids_assert_3.jpg', false),
(37, '/storage/images/products/under_armour_kids_assert_4.jpg', false);

-- Brooks Kids Ghost 12 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 3, 1),
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 3, 2),
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 4, 1),
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 4, 2),
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 5, 1),
('Brooks Kids Ghost 12', 3, 55.00, 'Soft cushioning', 20, 5, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(38, '/storage/images/products/brooks_kids_ghost_12_1.jpg', true),
(38, '/storage/images/products/brooks_kids_ghost_12_2.jpg', false),
(38, '/storage/images/products/brooks_kids_ghost_12_3.jpg', false),
(38, '/storage/images/products/brooks_kids_ghost_12_4.jpg', false);

-- Asics Kids GT-1000 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 4, 1),
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 4, 2),
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 5, 1),
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 5, 2),
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 6, 1),
('Asics Kids GT-1000', 3, 50.00, 'Stability and support', 25, 6, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(39, '/storage/images/products/asics_kids_gt_1000_1.jpg', true),
(39, '/storage/images/products/asics_kids_gt_1000_2.jpg', false),
(39, '/storage/images/products/asics_kids_gt_1000_3.jpg', false),
(39, '/storage/images/products/asics_kids_gt_1000_4.jpg', false);

-- Hoka One One Kids variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 5, 1),
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 5, 2),
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 6, 1),
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 6, 2),
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 1, 1),
('Hoka One One Kids', 3, 60.00, 'Cushioned comfort', 20, 1, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(40, '/storage/images/products/hoka_one_one_kids_1.jpg', true),
(40, '/storage/images/products/hoka_one_one_kids_2.jpg', false),
(40, '/storage/images/products/hoka_one_one_kids_3.jpg', false),
(40, '/storage/images/products/hoka_one_one_kids_4.jpg', false);

-- New Balance Kids 860v10 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 6, 1),
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 6, 2),
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 1, 1),
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 1, 2),
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 2, 1),
('New Balance Kids 860v10', 3, 65.00, 'Stability and cushioning', 18, 2, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(41, '/storage/images/products/new_balance_kids_860v10_1.jpg', true),
(41, '/storage/images/products/new_balance_kids_860v10_2.jpg', false),
(41, '/storage/images/products/new_balance_kids_860v10_3.jpg', false),
(41, '/storage/images/products/new_balance_kids_860v10_4.jpg', false);

-- Saucony Kids Guide ISO 2 variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 1, 1),
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 1, 2),
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 2, 1),
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 2, 2),
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 3, 1),
('Saucony Kids Guide ISO 2', 3, 70.00, 'Supportive and comfortable', 22, 3, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(42, '/storage/images/products/saucony_kids_guide_iso_2_1.jpg', true),
(42, '/storage/images/products/saucony_kids_guide_iso_2_2.jpg', false),
(42, '/storage/images/products/saucony_kids_guide_iso_2_3.jpg', false),
(42, '/storage/images/products/saucony_kids_guide_iso_2_4.jpg', false);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(43, '/storage/images/products/merrell_kids_trail_chaser_1.jpg', true),
(43, '/storage/images/products/merrell_kids_trail_chaser_2.jpg', false),
(43, '/storage/images/products/merrell_kids_trail_chaser_3.jpg', false),
(43, '/storage/images/products/merrell_kids_trail_chaser_4.jpg', false);

-- Merrell Kids Trail Chaser variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 2, 1),
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 2, 2),
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 3, 1),
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 3, 2),
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 4, 1),
('Merrell Kids Trail Chaser', 3, 55.00, 'Trail ready', 20, 4, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(44, '/storage/images/products/merrell_kids_trail_chaser_1.jpg', true),
(44, '/storage/images/products/merrell_kids_trail_chaser_2.jpg', false),
(44, '/storage/images/products/merrell_kids_trail_chaser_3.jpg', false),
(44, '/storage/images/products/merrell_kids_trail_chaser_4.jpg', false);

-- Altra Kids One Jr variations
INSERT INTO products (name, category_id, price, description, stock_quantity, color_id, size_id) VALUES
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 3, 1),
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 3, 2),
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 4, 1),
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 4, 2),
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 5, 1),
('Altra Kids One Jr', 3, 60.00, 'Balanced cushioning', 18, 5, 2);

INSERT INTO product_images (product_id, image_path, is_main_image) VALUES
(45, '/storage/images/products/altra_kids_one_jr_1.jpg', true),
(45, '/storage/images/products/altra_kids_one_jr_2.jpg', false),
(45, '/storage/images/products/altra_kids_one_jr_3.jpg', false),
(45, '/storage/images/products/altra_kids_one_jr_4.jpg', false);

-- User 
INSERT INTO users (last_name, first_name, username, email, password, address, phone_number, role) VALUES
('Smith', 'John', 'johnsmith', 'admin@example.com', 'admin', '123 Main St, Laketown', '555-1000', 'admin'),
('Brown', 'Charlie', 'charliebrown', 'charliebrown@example.com', 'encryptedpassword', '111 Pine St, Laketown', '555-1001', 'user'),
('White', 'Betty', 'bettywhite', 'bettywhite@example.com', 'encryptedpassword', '112 Pine St, Laketown', '555-1002', 'user'),
('Johnson', 'David', 'davidjohnson', 'davidjohnson@example.com', 'encryptedpassword', '113 Pine St, Laketown', '555-1003', 'user'),
('Jones', 'Sarah', 'sarahjones', 'sarahjones@example.com', 'encryptedpassword', '114 Pine St, Laketown', '555-1004', 'user'),
('Miller', 'Lucas', 'lucasmiller', 'lucasmiller@example.com', 'encryptedpassword', '115 Pine St, Laketown', '555-1005', 'user'),
('Davis', 'Emma', 'emmadavis', 'emmadavis@example.com', 'encryptedpassword', '116 Pine St, Laketown', '555-1006', 'user'),
('Garcia', 'Olivia', 'oliviagarcia', 'oliviagarcia@example.com', 'encryptedpassword', '117 Pine St, Laketown', '555-1007', 'user'),
('Wilson', 'Noah', 'noahwilson', 'noahwilson@example.com', 'encryptedpassword', '118 Pine St, Laketown', '555-1008', 'user'),
('Moore', 'Isabella', 'isabellamoore', 'isabellamoore@example.com', 'encryptedpassword', '119 Pine St, Laketown', '555-1009', 'user'),
('Taylor', 'Ethan', 'ethantaylor', 'ethantaylor@example.com', 'encryptedpassword', '120 Pine St, Laketown', '555-1010', 'user'),
('Anderson', 'Ava', 'avaanderson', 'avaanderson@example.com', 'encryptedpassword', '121 Pine St, Laketown', '555-1011', 'user'),
('Thomas', 'Sophia', 'sophiathomas', 'sophiathomas@example.com', 'encryptedpassword', '122 Pine St, Laketown', '555-1012', 'user'),
('Jackson', 'Mason', 'masonjackson', 'masonjackson@example.com', 'encryptedpassword', '123 Pine St, Laketown', '555-1013', 'user'),
('Lee', 'Mia', 'miale', 'mialee@example.com', 'encryptedpassword', '124 Pine St, Laketown', '555-1014', 'user'),
('Perez', 'James', 'jamesperez', 'jamesperez@example.com', 'encryptedpassword', '125 Pine St, Laketown', '555-1015', 'user'),
('Harris', 'Charlotte', 'charlotteharris', 'charlotteharris@example.com', 'encryptedpassword', '126 Pine St, Laketown', '555-1016', 'user'),
('Clark', 'Logan', 'loganclark', 'loganclark@example.com', 'encryptedpassword', '127 Pine St, Laketown', '555-1017', 'user'),
('Robinson', 'Lily', 'lilyrobinson', 'lilyrobinson@example.com', 'encryptedpassword', '128 Pine St, Laketown', '555-1018', 'user'),
('Lewis', 'Jacob', 'jacoblewis', 'jacoblewis@example.com', 'encryptedpassword', '129 Pine St, Laketown', '555-1019', 'user'),
('Walker', 'Michael', 'michaelwalker', 'michaelwalker@example.com', 'encryptedpassword', '130 Pine St, Laketown', '555-1020', 'user');

-- Inserting orders
INSERT INTO orders (user_id, total_amount) VALUES
(1, 195.00),
(2, 130.00),
(3, 90.00),
(4, 140.00),
(5, 120.00),
(6, 110.00),
(7, 130.00),
(8, 90.00),
(9, 140.00),
(10, 120.00),
(11, 110.00),
(12, 130.00),
(13, 90.00),
(14, 140.00),
(15, 120.00),
(16, 110.00),
(17, 130.00),
(18, 90.00),
(19, 140.00),
(20, 120.00),
(21, 110.00),
(22, 130.00),
(23, 90.00),
(24, 140.00),
(25, 120.00);


-- Assuming order_id increments
INSERT INTO order_details (order_id, product_id, quantity, price) VALUES
(1, 1, 1, 110.00),
(1, 2, 2, 85.00),
(1, 3, 1, 90.00),
(2, 4, 1, 140.00),
(2, 5, 1, 120.00),
(2, 6, 1, 130.00),
(3, 7, 1, 90.00),
(3, 8, 1, 140.00),
(3, 9, 1, 120.00),
(4, 10, 1, 110.00),
(4, 11, 1, 130.00),
(4, 12, 1, 90.00),
(5, 13, 1, 140.00),
(5, 14, 1, 120.00),
(5, 15, 1, 110.00),
(6, 16, 1, 130.00),
(6, 17, 1, 90.00),
(6, 18, 1, 140.00),
(7, 19, 1, 120.00),
(7, 20, 1, 110.00),
(7, 21, 1, 130.00),
(8, 22, 1, 90.00),
(8, 23, 1, 140.00),
(8, 24, 1, 120.00),
(9, 25, 1, 110.00),
(9, 26, 1, 130.00),
(9, 27, 1, 90.00),
(10, 28, 1, 140.00),
(10, 29, 1, 120.00),
(10, 30, 1, 110.00),
(11, 31, 1, 130.00),
(11, 32, 1, 90.00),
(11, 33, 1, 140.00),
(12, 34, 1, 120.00),
(12, 35, 1, 110.00),
(12, 36, 1, 130.00),
(13, 37, 1, 90.00),
(13, 38, 1, 140.00),
(13, 39, 1, 120.00),
(14, 40, 1, 110.00),
(14, 41, 1, 130.00),
(14, 42, 1, 90.00),
(15, 43, 1, 140.00),
(15, 44, 1, 120.00),
(15, 45, 1, 110.00);

-- Coupons
INSERT INTO coupons (coupon_code, discount, start_date, expiration_date) VALUES
('25OFF', 25.00, '2024-05-01 00:00:00', '2024-10-31 23:59:59'),
('FREESHIP', 0.00, '2024-05-01 00:00:00', '2024-10-31 23:59:59'),
('10OFF', 10.00, '2024-05-01 00:00:00', '2024-10-31 23:59:59');