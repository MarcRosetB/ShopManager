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
