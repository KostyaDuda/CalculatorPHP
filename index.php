<html>
    <head>
        <title>MVC Calculator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 class="heading">MVC Calculator</h1>
        <div class="container" style="height: 700px;">
            <form class="calc-form" action="includes/calculate.php">
                <p class="num-group">
                    <input required class="input-el" type="number" name="num1" id="num1" placeholder="Введіть Перше число">
                </p>
                <p class="operator-group">
                    <select required class="input-el" name="operator" id="operator">
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="mult">*</option>
                        <option value="div">/</option>
                    </select>
                </p>
                <p class="num-group">
                    <input required class="input-el" type="number" name="num2" id="num2" placeholder="Введіть Друге число">
                </p>
                <div class="text-center">
                    <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
    </body>
</html>