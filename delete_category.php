<?php
$conn=mysqli_connect('localhost','root','','phpapi');
$id=$_GET['id'];
$sql="delete from category where id='$id'";
$arr=array();
if(mysqli_query($conn,$sql))
{
    $data['msg']="data deleted";
    $data['status']="data deleted successfully";
    array_push($arr,$data);
    echo json_encode($arr);
}
else
{
    $data['msg']="data not deleted";
    $data['status']="data not deleted";
    array_push($arr,$data);
    echo json_encode($arr);
}
?>