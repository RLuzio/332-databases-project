<html>

<head>
        <title>Results</title>
</head>

<body>

        <div>
        <a href="/.">Back</a>
        <?php
                echo "test";
                $connection = new mysqli('mariadb', 'cs332d26', 'sai2Jima', 'cs332d26') or die ("Count not connect: ".mysqli_connect_error());
                if ($connection) {
                        echo "Connection Established";

                        if (isset($_POST['p1'])) {
                                $query = "SELECT title, classroom, meet_days, begin_time, end_time
                                        FROM professor p, section s
                                        WHERE s.prof_ssn = ".$_POST["social_sec"];

                                if(!$query) {
                                        echo "Error with Query: ".mysqli_error();
                                }

                                $data = mysql_query($query, $connection);

                                if ($data or mysql_num_rows($data) <= 0) {
                                        echo "No results for ".$_POST["social_sec"];
                                }

                                else {
                                        echo "<table>
                                                <thead>
                                                <tr>
                                                 <th>Title</th>
                                                 <th>Classroom</th>
                                                 <th>Meeting Days</th>
                                                 <th>Meeting Start</th>
                                                 <th>Meeting End</th>
                                                </tr>
                                                </thead>
                                              <tbody>";
                                        while($row = mysql_fetch_array($data)) {
                                                echo "<tr>
                                                         <td>".$row['title']."</td>
                                                         <td>".$row['classroom']."</td>
                                                         <td>".$row['meet_days']."</td>
                                                         <td>".$row['begin_time']."</td>
                                                         <td>".$row['end_time']."</td>
                                                      </tr>";
                                        }
                                        echo "</tbody>";
                                        echo "</table>";
                                }
                        }

                        elseif(isset($_POST['p2'])) {
                                $query = "SELECT distinct grade, count(s_cwid) as stu_count
                                        FROM enrollment e
                                        WHERE e.course_num = ".$_POST["course_num"]."
                                        AND e.sect_num = ".$_POST["sect_num"]."
                                        GROUP BY grade";

                                if (!$query) {
                                        echo "Error with Query: " .mysql_error();
                                }

                                $data = mysql_query($query, $connection);

                                if (!$data or mysql_num_rows($data) <= 0) {
                                        echo "No results for course: ".$_POST["course_num"]." or section: ".$_POST["sect_num"].;
                                }
                                else {
                                        echo "<table>
                                               <thead>
                                                <tr>
                                                 <th>Grade</th>
                                                 <th>Count</th>
                                                </tr>
                                               </thead>
                                              <tbody>";
                                        while($row = mysql_fetch_array($data)) {
                                                echo "<tr>
                                                         <td>".$row['grade']."</td>
                                                         <td>".$row['stu_count']."</td>
                                                      </tr>";
                                        }
                                        echo "</thead>";
                                        echo "</table>";
                                }
                        }

                        elseif(isset($_POST['stu1'])) {
                                $query = "SELECT sect_num, classroom, meet_days, begin_time, end_time, count(s_cwid) as stu_count
                                        FROM enrollment e, section s
                                        WHERE e.course_num = ".$_POST['course_num']."
                                        AND s.course_num = ".$_POST['course_num']."
                                        AND e.sect_num = s.sect_num
                                        GROUP BY sect_num";

                                if (!$query) {
                                echo "Error with Query".mysql_error();
                                }

                                else {
                                        $data = mysql_query($query, $connection)

                                        if (!$data or mysql_num_rows($data) <= 0) {
                                                echo "No result for: ".$_POST["course_num"].;
                                        }
                                        else {
                                                echo "<table>
                                                        <thead>
                                                                <tr>
                                                                <th>Section Num</th>
                                                                <th>Classroom</th>
                                                                <th>Meeting Days</th>
                                                                <th>Start Time</th>
                                                                <th>End Time</th>
                                                                <th>Num Students</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>";

                                                while($row = mysql_fetch_array($data)) {
                                                echo "<tr>
                                                         <td>".$row['sect_num']."</td>
                                                         <td>".$row['classroom']."</td>
                                                         <td>".$row['meet_days']."</td>
                                                         <td>".$row['begin_time']."</td>
                                                         <td>".$row['end_time']."</td>
                                                         <td>".$row['stu_count']."</td>
                                                      </tr>";
                                                }
                                                echo "</thead>";
                                                echo "</table>";
                                        }
                                }
                        }

                        elseif (isset($_POST["stu2"])) {
                                $query = "SELECT grade, title, course_num
                                        FROM enrollment e, course c
                                        WHERE e.course_num = c.course_num
                                        AND e.s_cwid = ".$_POST['cwid'].;

                                if(!$query) {
                                        echo "Error with Query".mysql_error();
                                }
                                else {
                                        $data = mysql_query($query, $connection);

                                        if (!$data or mysql_num_rows($data) <= 0) {
                                        echo "Could not get: ".$_POST["cwid"].;
                                        }
                                        else {
                                                echo "<table>
                                                        <thead>
                                                                <tr>
                                                                <th>Title</th>
                                                                <th>Course Number</th>
                                                                <th>Grade</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>";

                                                while($row = mysql_fetch_array($data)) {
                                                echo "<tr>
                                                         <td>".$row['title']."</td>
                                                         <td>".$row['course_num']."</td>
                                                         <td>".$row['grade']."</td>
                                                      </tr>";
                                                }
                                                echo "</thead>";
                                                echo "</table>";
                                        }
                                }
                        }
                        mysqli_close($connection);

                        else {
                                echo "Something went terribly wrong".mysql_error();
                        }

                }

                else {
                        die("Connection failed. Reason: ".mysql_error());
                }
        ?>
        </div>
</body>
</html>
