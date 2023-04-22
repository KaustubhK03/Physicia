<?php
$servername = "Kaustubhs-MacBook-Air.local"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "12345678"; // Replace with your MySQL password
$dbname = "fit"; // Replace with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Retrieve the selected experience level from the dropdown menu
    $experience = $_POST["experience"];

// Depending on the selected experience level, display a different table
    if ($experience == "beginner") {
        $sql = "SELECT * FROM Bro_Split";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednessay</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row["Monday"]}</td><td>{$row["Tuesday"]}</td><td>{$row["Wednessay"]}</td><td>{$row["Thursday"]}</td><td>{$row["Friday"]}</td><td>{$row["Saturday"]}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No results found";
        }
    } elseif ($experience == "intermediate") {
        $sql = "SELECT * FROM Upper_Lower";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead><tr><th>Monday</th><th>Tuesday</th><th>Thursday</th><th>Friday</th><th></th></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row["Monday"]}</td><td>{$row["Tuesday"]}</td><td>{$row["Thursday"]}</td><td>{$row["Friday"]}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No results found";
        }
    } else {
        $sql = "SELECT * FROM Push_Pull_Legs";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead><tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr></thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>{$row["Monday"]}</td><td>{$row["Tuesday"]}</td><td>{$row["Wednesday"]}</td><td>{$row["Thursday"]}</td><td>{$row["Friday"]}</td><td>{$row["Saturday"]}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "No results found";
        }
    }
}
echo "This is just a sample workout plan and you can modify it with your own favorite exercises\n";
echo "Made By Kaustubh Kalambkar\n";
echo "Ishan Patidar\n";
echo "Harsh Verma\n";
echo "Harsh Rao Gaikwad\n";
