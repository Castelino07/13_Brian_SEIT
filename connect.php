<?php

$servername="localhost";
$username="root";
$password="jbrag42669";
$dbname="Brian";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br>Connected successfully";


$firstname= $_POST['fname'];
$lastname= $_POST['lname'];
$nickname= $_POST['nname'];
$dateofbirth= $_POST['dob'];
$gender=$_POST['gender'];
$contact=$_POST['num'];
$email=$_POST['em'];
$address=$_POST['addr'];
$image=$_POST['pic'];

$hsc=$_POST['hsc'];
$ssc=$_POST['ssc'];
$diploma=$_POST['dip'];
$degree=$_POST['sem'];

$skills=$_POST['skills'];
$achievements=$_POST['achieve'];
$workshops=$_POST['progg'];
$additional=$_POST['additional'];

$title=$_POST['projname'];
$faculty=$_POST['facmem'];
$description=$_POST['description'];

$member=$_POST['member'];


$sql = "INSERT INTO portfolio(fname,lname,nname,dob,gender,num,em,addr,pic,hsc,ssc,dip,sem,skills,achieve,progg,additional,projname,facmem,description,member) VALUES
('$firstname','$lastname','$nickname','$dateofbirth','$gender','$contact','$email','$address','$image','$hsc','$ssc','$diploma','$degree','$skills','$achievements','$workshops','$additional','$title','$faculty','$description','$member')";


if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>
