CREATE DATABASE guestbook;
USE guestbook;
CREATE TABLE comments( id INT(11) NOT NULL AUTO_INCREMENT, email TINYTEXT, comment TINYTEXT, created_at INT, PRIMARY KEY(id) ); 