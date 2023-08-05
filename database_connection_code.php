
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<?php
// Establishing a database connection
$servername = "127.0.0.1";
$username = "root";
$password = "kanak@05";
$dbname = "cynapto_assignment";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Processing the form data when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieving the form data
  $studentName = $_POST["name"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  $mobileNo = $_POST["phone"];
  $gender = $_POST["gender"];
  
  // Inserting the data into the database
  $sql = "INSERT INTO student_data (name, address, email, phone, gender) VALUES ('$studentName', '$address', '$email', '$mobileNo', '$gender')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}
$sql = "SELECT * FROM student_data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Phone</th><th>Address</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["address"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

