<?php
     $conn = mysqli_connect("localhost","root","","MySQL PHP Blog");

     if (!$conn) {
        echo "<h3> Unable to establish connection </h3>";
    }

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST["New_post"])){
        $Title = $_REQUEST["Title"];
        $Content = $_REQUEST["Content"];

        $sql = "INSERT into data(Title, Content) VALUES('$Title', '$Content')";
        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }
        
if(isset($_REQUEST['ID'])){
    $ID=$_REQUEST['ID'];
    $sql = "SELECT * FROM data WHERE ID = $ID";
    $query = mysqli_query($conn, $sql);


}

if(isset($_REQUEST['update'])){
    $ID=$_REQUEST['ID'];
    $Title = $_REQUEST["Title"];
    $Content = $_REQUEST["Content"];

    $sql = "UPDATE data SET Title ='$Title', Content= '$Content' WHERE ID = $ID";
    $query = mysqli_query($conn, $sql);

    header("Location: index.php?info=updated");
        exit();

}
if(isset($_REQUEST['delete'])){
    $ID=$_REQUEST['ID'];
    $sql="DELETE FROM data WHERE ID = $ID";
    $query = mysqli_query($conn, $sql);

    header("Location: index.php?info=delete");
        exit();

}

