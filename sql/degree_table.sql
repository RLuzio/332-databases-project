CREATE TABLE IF NOT EXISTS college_degrees(
        professor_ssn NUMERIC(9) NOT NULL,
        PRIMARY KEY (professor_ssn),
        FOREIGN KEY (professor_ssn) REFERENCES professor(ssn)
);
