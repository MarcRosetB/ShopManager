DROP DATABASE IF EXISTS ShopManager;
CREATE DATABASE ShopManager;
USE ShopManager;

CREATE TABLE Town (
    TownId INT AUTO_INCREMENT PRIMARY KEY,
    TownName VARCHAR(50) NOT NULL
);

CREATE TABLE Shop (
    ShopId INT AUTO_INCREMENT PRIMARY KEY,
    ShopNickName VARCHAR (50) NOT NULL,
    Fk_Town INT NOT NULL,
    FOREIGN KEY (Fk_Town) REFERENCES Town(TownId)
);

CREATE TABLE Department (
    DepartmentId INT AUTO_INCREMENT PRIMARY KEY,
    DepartmentName VARCHAR (50)
);

CREATE TABLE Employee (
    EmployeeId INT AUTO_INCREMENT PRIMARY KEY,
    EmployeeName VARCHAR (50) NOT NULL,
    EmployeePhone CHAR (9) NOT NULL UNIQUE,
    EmployeeEmail VARCHAR (50) NOT NULL UNIQUE,
    EmployeePWD VARCHAR (255) NOT NULL,
    Fk_Department INT NOT NULL,
    Fk_Shop INT NOT NULL,
    FOREIGN KEY (Fk_Department) REFERENCES Department(DepartmentId),
    FOREIGN KEY (Fk_Shop) REFERENCES Shop(ShopId)
);

CREATE TABLE Client (
    ClientId INT AUTO_INCREMENT PRIMARY KEY,
    ClientName VARCHAR (100) NOT NULL,
    ClientAddress VARCHAR(150) NOT NULL,
    Fk_Town INT NOT NULL,
    ClientCIF CHAR (9) NOT NULL UNIQUE,
    FOREIGN KEY (Fk_Town) REFERENCES Town(TownId)
);

CREATE TABLE ContactPerson (
    ContactPersonId INT AUTO_INCREMENT PRIMARY KEY,
    ContactPersonName VARCHAR (50) NOT NULL,
    ContactPersonPhone CHAR(9) UNIQUE NOT NULL,
    ContactPersonEmail VARCHAR (100) UNIQUE
);

CREATE TABLE DeliveryAddress (
    DeliveryAddressId INT AUTO_INCREMENT PRIMARY KEY,
    DeliveryAddressAddress VARCHAR (150) NOT NULL UNIQUE,
    Fk_Town INT,
    Fk_Client INT,
    FOREIGN KEY (Fk_Town) REFERENCES Town(TownId),
    FOREIGN KEY (Fk_Client) REFERENCES Client (ClientId)
);

CREATE TABLE Color (
    ColorId INT AUTO_INCREMENT PRIMARY KEY,
    ColorName VARCHAR(50) UNIQUE NOT NULL
);
