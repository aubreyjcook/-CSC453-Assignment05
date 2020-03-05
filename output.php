<?php
    $census = array
    (
    array("1790",3929214),
    array("1800",5236631),
    array("1810",7239881),
    array("1820",9638453),
    array("1830",12866020),
    array("1840",17069453),
    array("1850",23191876),
    array("1860",31443321),
    array("1870",38558371),
    array("1880",49371340),
    array("1890",62979766),
    array("1900",76212168),
    array("1910",92228531),
    array("1920",106021568),
    array("1930",123202660),
    array("1940",132165129),
    array("1950",151325798),
    array("1960",179323175),
    array("1970",203211926),
    array("1980",226545805),
    array("1990",248709873),
    array("2000",281421906),
    array("2010",308745538)
    );


?>
<br>
    <?php
        foreach($census as $value){
            if ("$_POST[year1]" == $value[0])
                $year1census = $value[1];
            
            if ("$_POST[year2]" == $value[0])
                $year2census = $value[1];
        }

        echo "<hr>";
        echo "Population ", "$_POST[year1]", ": <strong>", number_format($year1census), "</strong> <br>";
        echo "Population ", "$_POST[year2]", ": <strong>", number_format($year2census), "</strong>";
        echo "<hr>";
        if ($year1census > $year2census)
            echo "<strong class='red'> The Population decreased by ", $year1census - $year2census;
        else if ($year1census < $year2census)
            echo "<strong class='green'> The Population increased by ", $year2census - $year1census;
        else
            echo "<strong> There was no population change. </strong>";
    ?>