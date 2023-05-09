<?php
$conn=mysqli_connect('localhost','root','','phpapi');
$cname=$_POST['cname'];
$price=$_POST['price'];
$sql="insert into category(cname,price) values('$cname','$price')";
$arr=array();
if(mysqli_query($conn,$sql))
{
    $data['msg']="data add";
    $data['status']="successfully inserted";
    array_push($arr,$data);
    echo json_encode($arr);
}
else
{
    $data['msg']="data not add";
    $data['status']="not inserted";
    array_push($arr,$data);
    echo json_encode($arr);
}
?>