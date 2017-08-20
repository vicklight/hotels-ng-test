<?php
$servername ="localhost";
$username = "root";
$password="";
$dbname ="hotels-ng-tees";

// create connection

$conn = new mysqli("localhost","root","","hotels-ng-test");

//check connection
if ($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
?>

<?php
if (isset($_POST['submit'])) {
    $intern_id = $_POST['intern_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

#echo "Intern Info <br/> ID:$intern_id, Name : $name, Email: $email, Phone: $phone";

    $sql = "INSERT INTO hotels-ng-test($intern_id, $name, $email, $phone)
       VALUES ('intern/001','Victor','victor.nwuwa93@gmail.com','07030196806')";

    if ($conn->query($sql) === TRUE) {
        echo "Successfully Inserted";
        echo"<a href='internship_members.php'>View Members></a>";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>