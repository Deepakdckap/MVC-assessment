CREATE DATABASE stocks;

use stocks;

-- its a sample master table for 5 brands
CREATE TABLE brands(
	id int NOT null AUTO_INCREMENT PRIMARY KEY,
    brandNames varchar(255),
    created_at timestamp,
    updated_at timestamp
);

INSERT INTO brands(brandNames,created_at,updated_at)
VALUES('Tata Motors',now(),now()),
('Hyundai',now(),now()),
('Kia',now(),now()),
('Mahindra',now(),now()),
('Renault',now(),now());


-- this is actual product table where user can insert
CREATE TABLE products(
	id int NOT null AUTO_INCREMENT PRIMARY KEY,
    productName varchar(255),
    productImages varchar(255),
    sku varchar(255),
    price int,
    brand_Id int,
    manufactureDate date,
    availableStock int,
    created_at timestamp,
    updated_at timestamp,

    FOREIGN KEY (brand_Id) REFERENCES brands(id)
);