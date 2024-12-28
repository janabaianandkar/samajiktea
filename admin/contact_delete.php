<?php
session_start();
$id=$_GET['id'];
include('connect.php');

$sql="delete from contact where id='$id'";

if(mysqli_query($con,$sql))
{
    echo "<script>alert('Contact deleted...')
    window.location.href='../admin/contact_table.php'</script>";
}
else
{
    echo "<script>alert('Contact not deleted..?')
    window.location.href='../admin/contact_table.php'</script>";
}
?>