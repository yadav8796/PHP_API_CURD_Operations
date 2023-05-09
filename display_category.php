<?php
$conn=mysqli_connect('localhost','root','','phpapi');
$sql="select * from category";
$rs=mysqli_query($conn,$sql);
$arr=array();
while($rw=mysqli_fetch_array($rs))
{
    $data['id']=$rw['id'];
    $data['cname']=$rw['cname'];
    $data['price']=$rw['price'];
    array_push($arr,$data);
}
echo json_encode($arr);
?>