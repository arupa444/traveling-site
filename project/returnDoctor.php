<!DOCTYPE html>
<html>
    <head>
        <title>Appointment Table</title>
        <style>
            table {
                border : 2px solid black;
                width: 100%;
                color: #588c7e;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th {
                background-color: #588c7e;
                color: white;
                padding: 20px;
            }
            td{
                padding: 20px;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>PhoneNumber</th>
                <th>Email</th>
                <th>PINCode</th>
                <th>Location1</th>
                <th>City</th>
                <th>State1</th>
                <th>AddressType</th>
                <th>appointTime</th>
                <th>appointDate</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "doctorsAppointment");
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM doctorAppointments";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Sl.No"]. "</td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["PhoneNumber"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["PINCode"] . "</td><td>" . $row["Location1"] . "</td><td>" . $row["City"] . "</td><td>" . $row["State1"] . "</td><td>" . $row["AddressType"] . "</td><td>" . $row["appointTime"] . "</td><td>" . $row["appointDate"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
            ?>
        </table>
    </body>
</html>