CREATE TABLE IF NOT EXISTS prerequisite(
        prereq_cnum MEDIUMINT UNSIGNED NOT NULL,
        PRIMARY KEY(prereq_cnum),
        FOREIGN KEY (prereq_cnum) REFERENCES course(cnum)
);
