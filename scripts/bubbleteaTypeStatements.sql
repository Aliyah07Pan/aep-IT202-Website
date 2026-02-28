-- Items Table
CREATE TABLE bubbletea_items (
    bubbletea_id INT NOT NULL,
    bubbletea_code VARCHAR(10) NOT NULL UNIQUE,
    bubbletea_name VARCHAR(255) NOT NULL,
    bubbletea_description TEXT NOT NULL,
    bubbletea_brand VARCHAR(50) NOT NULL,

    bubbletea_size VARCHAR(50) NOT NULL,
    bubbletea_sugar_level VARCHAR(50) NOT NULL,
    bubbletea_ice_level VARCHAR(50) NOT NULL,

    bubbletea_type_id INT DEFAULT NULL,

    bubbletea_buy_price DECIMAL(10,2) NOT NULL,
    bubbletea_sell_price DECIMAL(10,2) NOT NULL,

    date_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (bubbletea_id),

    FOREIGN KEY (bubbletea_type_id)
        REFERENCES bubbletea_types(bubbletea_type_id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

INSERT INTO bubbletea_items
(bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
 bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
 bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
VALUES
(1, 'TARO', 'Taro Milk Tea',
 'A creamy milk black tea blended with sweet taro tropical root vegetable flavor and chewy tapioca pearls.',
 'Gong-Cha', 'Medium', '100%', 'Regular Ice', 1, 2.50, 5.50);

INSERT INTO bubbletea_items
(bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
 bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
 bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
VALUES
(2, 'MANGO', 'Mango Fruit Tea',
 'Refreshing jasmine green tea infused with mango and mango jelly.',
 'Gong-Cha', 'Large', '75%', 'Less Ice', 2, 2.00, 5.25);

INSERT INTO bubbletea_items
(bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
 bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
 bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
VALUES
(3, 'STRAWB', 'Strawberry Slush',
 'A refreshing blended ice drink made with sweet strawberries and a smooth icy texture.',
 'Gong-Cha', 'Medium', '75%', 'Extra Ice', 3, 2.50, 5.75);

INSERT INTO bubbletea_items
(bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
 bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
 bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
VALUES
(4, 'BRNSUG', 'Brown Sugar Milk Tea',
 'Rich milk tea sweetened with brown sugar and tapioca with sweet foam and cocoa powder on top.',
 'Gong-Cha', 'Medium', '100%', 'No Ice', 4, 2.75, 6.00);

INSERT INTO bubbletea_items
(bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
 bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
 bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
VALUES
(5, 'MATCHA', 'Matcha Cheese Foam Tea',
 'Premium matcha green tea topped with a creamy salted cheese foam.',
 'Gong-Cha', 'Large', '50%', 'Light Ice', 5, 3.00, 6.50);