<?php
$conn = new mysqli("localhost","root","","hotels-ng-test");
?>
<?php
echo "<ul>";
$sql="SELECT* from hotels-ng-test";
$query=mysqli_query($sql);
while($row=mysqli_fetch_array($query))
    echo "<li>ID:$row[0]</li><li>Name:$row[1]</li><li>Email:$row[2]</li><li>Phone:$row[3]</li>";
echo"</ul>";
?>
