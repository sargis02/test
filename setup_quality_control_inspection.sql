CREATE TABLE Quality_Control_Inspection (
    id INT AUTO_INCREMENT PRIMARY KEY,
    batch_id INT,
    stage VARCHAR(255),
    inspection_result TEXT,
    check_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (batch_id) REFERENCES Product_Batches(id)
);
