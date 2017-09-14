<!DOCTYPE html>
<html>
        <head>
        <style>
                label{display:inline-block;width:100px;margin-bottom:10px;}
        </style>
        <style>body{ background-color: #5e93ff;}</style>


        <title>Shopping List</title>
        </head>
                <body style ="text-align: left">
                        <h1> Shopping List </h1>
                        <form method="post" action="process.php">
                        <label>Item:</label>
                        <input type="text" name="ITEM" />
                        <br />

                        <label>Price:</label>
                        <input type="text" name="PRICE" />

                        <br />

                        <label>Number:</label>
                        <input type="text" name="NUMBER" />

                        <br />
                        <input type="submit" value="Add Item">

                        <br /><br />
                        <label></label>
                        </form>
                        <form method="post" action="connect.php">
                        <input type="text" name="search" />
                        <input type="submit" value="Search">
                        </form>
                </body>
</html>
