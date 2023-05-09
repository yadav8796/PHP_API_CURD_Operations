<?php
$conn=mysqli_connect('localhost','root','','phpapi');
$cname=$_POST['cname'];
$price=$_POST['price'];

$arr=array();
if(true)
{
   $data['name']=$cname;
   $data['price']=$price;
    array_push($arr,$data);
    echo json_encode($arr);
}
?>