CREATE TABLE IF NOT EXISTS department(
        dnum MEDIUMINT UNSIGNED NOT NULL,
        dname VARCHAR(50) NOT NULL,
        phone_num MEDIUMINT UNSIGNED NOT NULL,
        location VARCHAR(50) NOT NULL,
        chair_ssn NUMERIC(9) NOT NULL,
        PRIMARY KEY (dnum),
        FOREIGN KEY (chair_ssn) REFERENCES professor(ssn)
);
