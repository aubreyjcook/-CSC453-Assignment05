<?php
$primeArray = array();
for ($index = 1; $index <= $_POST["limit"]; $index++) {
    $primeArray[$index] = isPrime($index);
}

function isPrime($val){ //this function does not extend it's limit beyond the user input $_POST["limit"] since extending the algorithm to find prime numbers beyond this value is greater than the scope of this project
    if($val == 1)
    return 0;
    for ($index = 2; $index <= $_POST["limit"]; $index++) {
        if($val % $index == 0 && $val !== $index){
            return 0;
        }
    }
    return 1; 
}

?>
<br>
<table width="100%">
    <tr>
        <th colspan="10">1 - <?php echo $_POST["limit"];?> Prime Numbers are Red</th>
    </tr>
    <?php
    $indexGlobal = 1;
    foreach($primeArray as &$arrayValues){
        if($indexGlobal + 1 % 10 == 0 || $indexGlobal == 1){echo "<tr>";}
        if($arrayValues){
            echo "<td class='red'>$indexGlobal</td>";
        } else {
            echo "<td>$indexGlobal</td>";
        }
        if($indexGlobal % 10 == 0){echo "</tr>";}
        $indexGlobal++;
    }
    ?>
</table>