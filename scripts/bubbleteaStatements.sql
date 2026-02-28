-- Name: Aliyah Panjon
-- Course: IT 202-004
-- Date: 2/11/2026
-- Assignment: IT-202 Phase 2 - CRUD Categories and Items
-- Email: aep@njit.edu
CREATE TABLE bubbletea_types (
    bubbletea_type_id INT NOT NULL,
    bubbletea_type_code VARCHAR(255) NOT NULL UNIQUE,
    bubbletea_type_name VARCHAR(255) NOT NULL,
    bubbletea_series_location VARCHAR(50) NOT NULL,
    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (bubbletea_type_id)
);

INSERT INTO bubbletea_types
(bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
VALUES
(1, 'MT', 'Milk Tea', 'Milk Tea Series');

INSERT INTO bubbletea_types
(bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
VALUES
(2, 'FRU', 'Fruit Tea', 'Fruit Tea Series');

INSERT INTO bubbletea_types
(bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
VALUES
(3, 'SLU', 'Slush', 'Slushes');

INSERT INTO bubbletea_types
(bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
VALUES
(4, 'BRW', 'Brown Sugar', 'Gong-Cha Specialties');

INSERT INTO bubbletea_types
(bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
VALUES
(5, 'CHE', 'Cheese Foam', 'Cheese Foam Series');

SELECT * from bubbletea_types
