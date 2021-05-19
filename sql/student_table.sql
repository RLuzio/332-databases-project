CREATE TABLE IF NOT EXISTS student(
        cwid NUMERIC(9) NOT NULL,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        address VARCHAR(100) NOT NULL,
        phone_num MEDIUMINT UNSIGNED NOT NULL,
        major_dept MEDIUMINT UNSIGNED NOT NULL,
        PRIMARY KEY (cwid),
        FOREIGN KEY (major_dept) REFERENCES department(dnum)
);
