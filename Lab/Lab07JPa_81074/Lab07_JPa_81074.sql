-- Lab07 Solution
-- DROP the database if it exists
drop database  if exists SAFEWAY_JPa_81074;
-- CREATE THE DATABASE
CREATE DATABASE SAFEWAY_JPa_81074;

-- SHOW DATABASES;
SHOW DATABASES; 

-- Use the database
USE SAFEWAY_JPa_81074;

-- Create the CUSTOMER Table (pick your own Entities for the next part)

create table CUSTOMER_JPa_81074(
    CustomerID int AUTO_INCREMENT not null,
    fName varchar(50) not null,
    lName varchar(50) not null,
    email varchar(255),
    PRIMARY key (CustomerID)
);


-- Create the PRODUCT Table
create table PRODUCT_JPa_81074(
    ProductID int AUTO_INCREMENT not null,
    pName varchar(50) not null,
    stock int(4) not null,
    price decimal(15,2) not null,
    description varchar(255) not null,
    primary key (ProductID)
);

create table ORDERS_JPa_81074(
    OrderID int AUTO_INCREMENT not null,
    ProductID int not null,
    CustomerID int not null,
    quantity int(3) not null,
    primary key (OrderID),
    FOREIGN KEY (ProductID) REFERENCES PRODUCT_JPa_81074(ProductID),
    FOREIGN KEY (CustomerID) REFERENCES CUSTOMER_JPa_81074(CustomerID)
);

-- SHOW TABLES;
DESC CUSTOMER_JPa_81074;
DESC PRODUCT_JPa_81074;
DESC ORDERS_JPa_81074;

-- INSERT Students

INSERT INTO CUSTOMER_JPa_81074 (fName, lName, email)
VALUES ("Jiweon", "Park", "jiweon.park@gmail.com"),
        ("Jason", "Lee", "jason.lee@gmail.com"),
        ("John", "Smith", "john.smith@gmail.com"),
        ("Mike", "Jones", "mike.jones@gmail.com"),
        ("Maria", "Garcia", "maria.garcia@gmail.com");

        
INSERT INTO PRODUCT_JPa_81074 (pName, stock, price, description)
VALUES ("potato", 4000, 10.10, "local and organic"),
        ("yogurt", 1000, 4.0, "greek yogurt"),
        ("sauce", 2000, 5.50, "salsa sauce"),
        ("wine", 1500, 20, "Canadian ice wine"),
        ("bagel", 1200, 10, "whole wheat bagel");

INSERT INTO ORDERS_JPa_81074 (ProductID, CustomerID, quantity)
VALUES (1,1,30),
        (2,1,10),
        (4,2,50),
        (3,5,20),
        (1,4,20);
        
-- SELECT (READ)
select * from CUSTOMER_JPa_81074;
SELECT * FROM PRODUCT_JPa_81074;
SELECT * FROM ORDERS_JPa_81074;

-- JOIN ALL TABLES
SELECT * FROM CUSTOMER_JPa_81074, PRODUCT_JPa_81074, ORDERS_JPa_81074
WHERE CUSTOMER_JPa_81074.CustomerID = ORDERS_JPa_81074.CustomerID 
AND   PRODUCT_JPa_81074.ProductID = ORDERS_JPa_81074.OrderID;

-- UPDATE (UPDATE)
update PRODUCT_JPa_81074 set stock = 1400
where pName = "bagel";

SELECT * FROM PRODUCT_JPa_81074;

-- DELETE (DELETE)
DELETE FROM ORDERS_JPa_81074 WHERE ProductID=3;
select * from ORDERS_JPa_81074;
