CREATE TABLE student_data (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL DEFAULT 'other',
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    INDEX email_idx (email),
    INDEX phone_idx (phone)
);
