<?php

$search=$_POST['search'];

$connect = mysqli_connect('localhost','newremoteuser','password','List');
if (!$connect)
{
        die ("Connection could not be established:" . mysql_error());
}

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
$doesMatch = mysqli_query($connect, "SELECT * FROM myList WHERE item='$search' OR price='$search' OR number='$search';");
$x = 0;
while ($row = mysqli_fetch_array($doesMatch))
{
                echo '<h1>';
                echo "Search Results: ";
                echo '</h1>';
                echo '<h2>';
                echo '<br /></h2>';

                echo "Item: ";
                echo $row['item'];

                echo "Price: ";
                echo $row['price'];

                echo "Number: ";
                echo $row['number'];
                echo '<br />';
                $x++;
}
if ($x == 0)
{
echo '<h1>';
echo 'No Results Found';
echo '</h1>';

}
