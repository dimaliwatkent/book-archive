CREATE DATABASE book_db;
USE book_db;
CREATE TABLE books (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
category VARCHAR(255),
publication_date DATE,
publisher VARCHAR(255),
description TEXT,
cover VARCHAR(255)
);
