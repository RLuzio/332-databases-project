CREATE TABLE IF NOT EXISTS enrollment(
        s_cwid NUMERIC(9) NOT NULL,
        sect_num MEDIUMINT UNSIGNED NOT NULL,
        grade CHAR(2) NOT NULL,
        course_num MEDIUMINT UNSIGNED NOT NULL,
        PRIMARY KEY (s_cwid, sect_num, course_num),
        FOREIGN KEY (s_cwid) REFERENCES student(cwid),
        FOREIGN KEY (sect_num) REFERENCES section(snum),
        FOREIGN KEY (course_num) REFERENCES course(cnum)
);
