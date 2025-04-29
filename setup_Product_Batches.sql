CREATE TABLE Product_Batches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    lot_number VARCHAR(255),
    barcode VARCHAR(255),
    FOREIGN KEY (product_id) REFERENCES Products(id)
);