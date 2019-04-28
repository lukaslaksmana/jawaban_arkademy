<?php
include 'conn.php';
$earned_vote = $_GET['earned_vote'];
$data = $earned_vote + 1;
$id  = $_GET['id'];
$query="UPDATE candidates SET earned_vote='$data' where id='$id'";
mysqli_query($koneksi, $query);
header("location:6.php");
?>