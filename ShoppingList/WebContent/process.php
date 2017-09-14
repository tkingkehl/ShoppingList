<?php

$item=$_POST['item'];
$price=$_POST['price'];
$number=$_POST['number'];

$connect = mysqli_connect('localhost','newremoteuser','password','List');
if (!$connect)
{
        die ("Connection could not be established:" . mysql_error());
}
mysqli_query($connect,"INSERT INTO myList (item,price,number)
                VALUES ('$item','$price','$number')");
        if(mysqli_affected_rows($connect) > 0){
        echo "<style>body{ background-color: #b3d9ff;}</style>";
        echo "<h1>Your item has been added to the list.</h1>";
        $print = mysqli_query($connect, "SELECT * FROM myList;");
        echo "<p>All Items that have been added so far:</p>";
        while ($row = mysqli_fetch_array($print))
        {
                echo "Item: ";
                echo $row['item'];

                echo "Price: ";
                echo $row['price'];

                echo "Number: ";
                echo $row['number'];
                echo '<br />';
        }
} else {
        echo "Item could not be added <br />";
        echo mysqli_error ($connect);
}
