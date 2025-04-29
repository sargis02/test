CREATE TABLE Temperature_Humidity (
    id INT AUTO_INCREMENT PRIMARY KEY,
    batch_id INT,
    temperature DECIMAL(5,2),
    humidity DECIMAL(5,2),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (batch_id) REFERENCES Product_Batches(id)
);
