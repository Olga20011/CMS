<?php
$id = $_GET["id"];
if($id){
include("./connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if (mysqli_query($conn, $sqlDelete)){
    header("Location:index.php");
}else{
    die("Data is not deleted");
}
}else{
    echo "post not found";
}

?>