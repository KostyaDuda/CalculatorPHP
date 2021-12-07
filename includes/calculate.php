    <?php
    include "../classes/Calc.php";
    // Getting form values from request
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    
    $calculator = new Calc($num1, $num2, $operator);
    echo "<p>Відповідь: " . $calculator->calculate() . "</p>";
    ?>