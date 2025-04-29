CREATE TABLE Affected_Batches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    batch_id INT,
    distribution_point VARCHAR(255),
    issue_description TEXT,
    affected_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (batch_id) REFERENCES Product_Batches(id)
);
