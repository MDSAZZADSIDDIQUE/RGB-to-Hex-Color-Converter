<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hex to RGB Color Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <form action="../Controllers/color_code_converter.php" method="POST">
        <fieldset>
            <label for="Hex color code: "></label>
            <input type="text" name="hexColorCode" id="hex_color_code">
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <?php
    if(isset($_GET['red'])) {
        echo nl2br("Red = {$_GET['red']}\n");
    }
    if(isset($_GET['green'])) {
        echo nl2br("Green = {$_GET['green']}\n");
    }
    if(isset($_GET['blue'])) {
        echo nl2br("Blue = {$_GET['blue']}\n");
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>