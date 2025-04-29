CREATE TABLE Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    origin VARCHAR(255),
    variety VARCHAR(255),
    harvest_date DATE,
    certifications VARCHAR(255)
);