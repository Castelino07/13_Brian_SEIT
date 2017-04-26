<?php
	$servername = "localhost";
	$username = "root";
	$password = "jbrag42669";
	$dbname = "Brian";
	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	}
	//echo "<br>Connected successfully<br>";

	$sql="SELECT * FROM portfolio";
	$record=mysqli_query($conn,$sql);
 ?>
  <table border="1">
  <tr>
  <th> First Name </th>
  <th> Second Name </th>
  <th> Nick Name </th>
  <th>  Birthdate </th>
  <th> Gender </th>
  <th> Number </th>
  <th> Email </th>
  <th> Address </th>
  <th>    </th>
  <th> HSC </th>
  <th> SSC </th>
  <th> Diploma </th>
  <th> Degree </th>
  <th> Skills </th>
  <th> Achievements </th>
  <th> Workshops </th>
  <th> Additional </th>
  <th> ProjectName </th>
  <th> Faculty in Charge </th>
  <th> Descripton </th>
  <th> Associated Club </th>
  </tr>
  <?php
  while($student=mysqli_fetch_assoc($record)){
  echo "<tr>";
  echo "<td>".$student['fname']."</td>";
  echo "<td>".$student['lname']."</td>";
  echo "<td>".$student['nname']."</td>";
  echo "<td>".$student['dob']."</td>";
  echo "<td>".$student['gender']."</td>";
  echo "<td>".$student['num']."</td>";
  echo "<td>".$student['em']."</td>";
  echo "<td>".$student['addr']."</td>";
  echo "<td>".$student['pic']."</td>";
  echo "<td>".$student['hsc']."</td>";
  echo "<td>".$student['ssc']."</td>";
  echo "<td>".$student['dip']."</td>";
  echo "<td>".$student['sem']."</td>";
  echo "<td>".$student['skills']."</td>";
  echo "<td>".$student['achieve']."</td>";
  echo "<td>".$student['progg']."</td>";
  echo "<td>".$student['additional']."</td>";
  echo "<td>".$student['projname']."</td>";
  echo "<td>".$student['facmem']."</td>";
  echo "<td>".$student['description']."</td>";
  echo "<td>".$student['member']."</td>";
  echo "</tr";
  echo "</table>";
}



 ?>
