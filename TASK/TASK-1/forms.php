<?php
$n=$_POST['stname'];
$c=$_POST['stdepartment'];
$con=mysqli_connect("localhost","root","","staff");
$sql="INSERT INTO staffdetails(staff_name,staff_department)values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
echo"USER DETAILS ADDED SUCCESSFULLY";
}
else
{

echo"USER DETAILS NOT ADDED";
}
?>
