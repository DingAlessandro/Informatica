<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Google Moduli</h1>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <form method="post" action="result.php">
                <label for="Q1">Question1: A</label>
                <br><br>
                <input type="text" id="Q1" name="Q1" value="your name" >
                <br><br>
                <label for="Q2">Question2: B</label>
                <br><br>
                <input type="password" id="Q2" name="Q2">
                <br><br>
                <label for="Q3">Question3: C</label>
                <br><br>
                <textarea id="Q3" name="Q3" rows="5" cols="40"></textarea>
                <br><br>
                <label for="Q4">Question4: D</label>
                <br><br>
                <input type="radio" id="Q4" name="Q4" value="A"> A
                <input type="radio" id="Q4" name="Q4" value="B"> B
                <input type="radio" id="Q4" name="Q4" value="C"> C
                <br><br>
                <label for="Q5">Question5: E</label>
                <br><br>
                <input type="checkbox" id="Q5" name="Q5[]" value="A"> A
                <input type="checkbox" id="Q5" name="Q5[]" value="B"> B
                <input type="checkbox" id="Q5" name="Q5[]" value="C"> C
                <br><br>
                <label for="Q6">Question6: F</label>
                <br><br>
                <select id="Q6" name="Q6">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <br><br>
                <label for="Q7">Question7: G</label>
                <br><br>
                <select size="3" id="Q7" name="Q7">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                <br><br>
                <label for="Q8">Question8: H</label>
                <br><br>
                <select id="Q8" name="Q8[]" size="4" multiple>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <br><br>
                <input class="submit" type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>
