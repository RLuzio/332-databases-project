CREATE TABLE IF NOT EXISTS professor(
        ssn NUMERIC(9) NOT NULL,
        name VARCHAR(50) NOT NULL,
        sex ENUm('m', 'f') NOT NULL,
        title VARCHAR(40) NOT NULL,
        salary FLOAT NOT NULL,
        street VARCHAR(50) NOT NULL,
        city VARCHAR(50) NOT NULL,
        zip MEDIUMINT UNSIGNED NOT NULL,
        state CHAR(2) NOT NULL,
        phone_area_code INT UNSIGNED NOT NULL,
        phone_number INT UNSIGNED NOT NULL,
        PRIMARY KEY (ssn)
);
