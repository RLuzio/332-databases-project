CREATE TABLE IF NOT EXISTS course(
        cnum MEDIUMINT UNSIGNED NOT NULL,
        ctitle VARCHAR(50) NOT NULL,
        textbook VARCHAR(50) NOT NULL,
        units INT UNSIGNED NOT NULL,
        deptnum MEDIUMINT UNSIGNED NOT NULL,
        PRIMARY KEY (cnum),
        FOREIGN KEY (deptnum) REFERENCES department(dnum)
);
