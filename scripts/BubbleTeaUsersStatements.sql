-- Name: Aliyah Panjon
-- Course: IT 202-004
-- Date: 2/11/2026
-- Assignment: IT-202 Phase 1 - Login and Logout
-- Email: aep@njit.edu

CREATE DATABASE bubbletea;


CREATE USER 'bubbletea_user'@'localhost' IDENTIFIED BY 'bubbletea_password';


GRANT ALL PRIVILEGES ON bubbletea.* TO 'bubbletea_user'@'localhost';
FLUSH PRIVILEGES;

USE bubbletea;

CREATE TABLE bubbletea_users (
    bubbletea_user_id INT NOT NULL AUTO_INCREMENT,
    email_address VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    pronouns VARCHAR(60) NOT NULL,
    first_name VARCHAR(60) NOT NULL,
    last_name VARCHAR(60) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (bubbletea_user_id)
);
INSERT INTO bubbletea_users
(email_address, password, pronouns, first_name, last_name, phone_number)
VALUES
('Hanni@bubbletea.com', SHA2('HanniSecure123!', 256), 'She/Her', 'Hanni', 'Pham', '555-1111');

INSERT INTO bubbletea_users
(email_address, password, pronouns, first_name, last_name, phone_number)
VALUES
('Preppy@bubbletea.com', SHA2('PreppyPass456!', 256), 'She/Her', 'Preppy', 'Legend', '555-2222');

INSERT INTO bubbletea_users
(email_address, password, pronouns, first_name, last_name, phone_number)
VALUES
('Miles@bubbletea.com', SHA2('Mike789Strong!', 256), 'He/Him', 'Miles', 'Molrales', '555-3333');
