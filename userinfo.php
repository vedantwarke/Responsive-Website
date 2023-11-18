<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";

}
else{
    echo "No";
}

mysqli_select_db($con, 'tours&travel');

$Username =$_POST['Username'];
$Email =$_POST['Email'];
$Phone =$_POST['Phone'];
$Comment =$_POST['Comment'];


$query = " insert into userinfo (Username, Email, Phone, Comment)
values ('$Username', '$Email', '$Phone', '$Comment')";

mysqli_query($con, $query);


?>
