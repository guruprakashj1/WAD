
Pre Req : 
Start the XAMPP server and start the Apache and MySQL services.

Create a new database : 
db name is my_database
SQL statement :

CREATE DATABASE my_database;


Create a new table :
table name is users

SQL statement :
create table users(
    id int(6) unsigned auto_increment primary key,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    email varchar(50),
    reg_date timestamp default current_timestamp on update current_timestamp
);

insert data into the table :

insert into users(firstname,lastname,email)
values('John','Lee','john@ex.com'),
('sanna','lee','sanna@ex.com');

#Array and String Handling#