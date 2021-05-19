CREATE TABLE IF NOT EXISTS section(
        snum MEDIUMINT UNSIGNED NOT NULL,
        classroom VARCHAR(50) NOT NULL,
        num_seats MEDIUMINT UNSIGNED NOT NULL,
        meet_days SET('Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat', 'Sun') NOT NULL,
        begin_time TIME NOT NULL,
        end_time TIME NOT NULL,
        course_num MEDIUMINT UNSIGNED NOT NULL,
        prof_ssn NUMERIC(9) NOT NULL,
        PRIMARY KEY (snum),
        FOREIGN KEY (course_num) REFERENCES course(cnum),
        FOREIGN KEY (prof_ssn) REFERENCES professor(ssn)
);
