CREATE DATABASE todo_list;

USE todo_list;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL
);
