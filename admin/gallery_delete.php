<?php
session_start();
$id=$_GET['id'];
include('connect.php');

$sql="delete from gallery where id='$id'";

if(mysqli_query($con,$sql))
{
    echo "<script>alert('Image deleted...')
    window.location.href='../admin/gallery_table.php'</script>";
}
else
{
    echo "<script>alert('Image not deleted..?')
    window.location.href='../admin/gallery_table.php'</script>";
}
?>