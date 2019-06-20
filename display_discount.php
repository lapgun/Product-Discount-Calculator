<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    echo "<form style='width: 300px; text-align: center;border: 1px solid black;'>";
    echo "product description: ".$num1."</br>";
    echo "List Price: ".$num2."</br>";
    echo "Discount Percent: ".$num3."</br>";
    echo "Discount Amount :".($num2 * $num3 * 0.01)."</br>";
    echo "Discount Price: ".($num2-($num2 * ($num3 * 0.01)));
    echo "</form>";
}
?>