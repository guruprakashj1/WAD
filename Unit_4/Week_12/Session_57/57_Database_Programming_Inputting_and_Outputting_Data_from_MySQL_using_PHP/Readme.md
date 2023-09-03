Blog system using Php and MySQL

1.Database setup  : 
Database name : blog_system
Tables required : 
    1. users
    2. blogs
    3. comments

SQL comment to create the DB and Table

CREATE DATABASE blog_system;

USE blog_system;

create table users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

create table blogs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table comments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    blog_id INT NOT NULL,
    user_id INT NOT NULL,
    content TEXT NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)


Files required are 
1.register.php
2.resister_process.php
3.login.php
4.login_process.php
5.create_blog.php
6.create_blog_process.php