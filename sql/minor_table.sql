CREATE TABLE IF NOT EXISTS minor(
        scwid NUMERIC(9) NOT NULL,
        minor_dept MEDIUMINT UNSIGNED NOT NULL,
        PRIMARY KEY(scwid, minor_dept),
        FOREIGN KEY (scwid) REFERENCES student(cwid),
        FOREIGN KEY (minor_dept) REFERENCES department(dnum)
);
