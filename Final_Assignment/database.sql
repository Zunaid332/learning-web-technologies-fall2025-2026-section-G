CREATE DATABASE product_db;
USE product_db;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    buying_price DOUBLE,
    selling_price DOUBLE,
    display TINYINT
);
