<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Assignment 4</title>
        <style>
            table,
            td,
            th {
                border: 1px solid black;
                font-weight: bold;
                text-align: center;
            }
            .red {
                background-color: red;
            }

        </style>
    </head>

    <body>
        <h1>Number Chart</h1>
        <form action="" method="post">
            <label>Enter Limit:
            </label>
            <input name="limit" type="number" step="10" min="10" max="500" required>
            <br>
            <br><br>
            <input type="submit" name="submit">
        <?php 
            if(isset($_POST['submit'])){ 
                include 'output.php';
            }else{

            }
        ?>
        </form>
    </body>

</html>