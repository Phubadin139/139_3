<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Array (เรียนวันที่ 4/12/2568)</title>
</head>
<body>
    <?php
    // ------------------ ตัวอย่าง Array ธรรมดา ------------------
    $car = array("voval", "BMW","Toyota");
    echo "I like " . $car[0] . ", " . $car[1] . " and " . $car[2] . ".<br><br>";
    ?>

    <?php
    // ------------------ Array แบบคู่ key => value ------------------
    $age = array("peter"=>"35", "Ben"=>"37", "JOE"=>"43","Tle"=>"19");

    echo "Peter is " . $age['peter'] . " years old.<br>";
    echo "Ben is " . $age['Ben'] . " years old.<br>";
    echo "Tle is " . $age['Tle'] . " years old.<br><br>";
    ?>

    <?php
    // ------------------ For Loop ------------------
    $fruit = array("แอปเปิ้ล","ส้ม","กล้วย","ลำไย","มังคุด","องุ่น");
    $arrlength = count($fruit);

    for ($x = 0; $x < $arrlength; $x++) {
        echo $fruit[$x] . " bar<br>";
    }

    echo "<br>";
    ?>

    <?php
    // ------------------ Foreach ------------------
    foreach ($fruit as $value) {
        echo $value . "<br>\n";
    }

    echo "<br>";
    ?>

    <?php
    // ------------------ Foreach แบบแสดง key => value ------------------
    $age = array("peter"=>"35", "Ben"=>"37", "JOE"=>"43","Tle"=>"19");

    foreach ($age as $x => $x_value) {
        echo $x . " มีอายุ " . $x_value . " ปี<br>\n";
    }

    echo "<br>";
    ?>

    <?php
    // ------------------ Array 2 มิติ ------------------
    $cars = array(
        array("volvo",22,18),
        array("BMW",15,13),
        array("Sabb",5,2),
        array("Land rover",17,15,100)
    );

    $rows = count($cars);

    for ($row = 0; $row < $rows; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        
        $cols = count($cars[$row]);

        for ($col = 0; $col < $cols; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }

        echo "</ul>";
    }
    ?>

</body>
</html>
