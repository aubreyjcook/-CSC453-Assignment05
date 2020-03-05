<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Assignment 5</title>
        <style>
        .red {
                color: red;
            }
        .green {
            color: green;
        }
        </style>
    </head>

    <body>
        <h1>US Census Population Change Calculator</h1>
        <form action="" method="post">
            <label for="year1">Year 1:
            </label>
            <select id="year1" name="year1">
                <option value="1790">1790</option>
                <option value="1800">1800</option>
                <option value="1810">1810</option>
                <option value="1820">1820</option>
                <option value="1830">1830</option>
                <option value="1840">1840</option>
                <option value="1850">1850</option>
                <option value="1860">1860</option>
                <option value="1870">1870</option>
                <option value="1880">1880</option>
                <option value="1890">1890</option>
                <option value="1900">1900</option>
                <option value="1910">1910</option>
                <option value="1920">1920</option>
                <option value="1930">1930</option>
                <option value="1940">1940</option>
                <option value="1950">1950</option>
                <option value="1960">1960</option>
                <option value="1970">1970</option>
                <option value="1980">1980</option>
                <option value="1990">1990</option>
                <option value="2000">2000</option>
                <option value="2010">2010</option>
            </select>
            <br>
            <label for="year2">Year 2:
            </label>
            <select id="year2" name="year2">
                <option value="1790">1790</option>
                <option value="1800">1800</option>
                <option value="1810">1810</option>
                <option value="1820">1820</option>
                <option value="1830">1830</option>
                <option value="1840">1840</option>
                <option value="1850">1850</option>
                <option value="1860">1860</option>
                <option value="1870">1870</option>
                <option value="1880">1880</option>
                <option value="1890">1890</option>
                <option value="1900">1900</option>
                <option value="1910">1910</option>
                <option value="1920">1920</option>
                <option value="1930">1930</option>
                <option value="1940">1940</option>
                <option value="1950">1950</option>
                <option value="1960">1960</option>
                <option value="1970">1970</option>
                <option value="1980">1980</option>
                <option value="1990">1990</option>
                <option value="2000">2000</option>
                <option value="2010">2010</option>
            </select>
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