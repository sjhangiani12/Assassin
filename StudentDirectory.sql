CREATE DATABASE StudentDirectory;
CREATE TABLE Student (
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email     VARCHAR(255)    NOT NULL,
  create_date   DATETIME    NOT NULL,
  password      VARCHAR(255)   NOT NULL,
  last_name     VARCHAR(255) NOT NULL,
  first_name    VARCHAR(255) NOT NULL,
  target        VARCHAR(255),
  username		VARCHAR(255) NOT NULL
);