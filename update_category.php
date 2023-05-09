<?php
$conn=mysqli_connect('localhost','root','','phpapi');
$id=$_GET['id'];
$cname=$_POST['cname'];
$price=$_POST['price'];
$sql="update category set cname='$cname',price='$price' where id='$id'";
$arr=array();
if(mysqli_query($conn,$sql))
{
    $data['msg']="data updated";
    $data['status']="successfully updated";
    array_push($arr,$data);
    echo json_encode($arr);
}
else
{
    $data['msg']="data not updated";
    $data['status']="not updated";
    array_push($arr,$data);
    echo json_encode($arr);
}
?>