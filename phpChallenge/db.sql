CREATE DATABASE book;
USE book;
CREATE TABLE book_saved(id INT NOT NULL PRIMARY_KEY,
title VARCHAR(255), author VARCHAR(255), description TEXT,
date_capt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
DESC book_saved;


-- alter table personal add capital int not null
-- alter table personal drop pasatiempo;
