<!DOCTYPE html>
<html>

<head>
    <title>Calendar</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h2>Calendar</h2>
    <table>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <?php
            $month = 1; // Change this to the desired month
            $year = 2023; // Change this to the desired year

            // Calculate the number of days in the month
            $daysInMonth = date("d", mktime(0, 0, 0, $month, 1, $year));

            // Loop through each day of the month
            for ($day = 1; $day <= $daysInMonth; $day++) {
                $date = date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));

                // Check if the current day is a weekend
                if (date("w", mktime(0, 0, 0, $month, $day, $year)) == 0 || date("w", mktime(0, 0, 0, $month, $day, $year)) == 1) {
                    $dayType = " weekend ";
                } else {
                    $dayType = " weekday ";
                }

                // Display the day of the month in a table cell
                echo "<tr>";
                echo "<td>" . $day . $dayType . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>