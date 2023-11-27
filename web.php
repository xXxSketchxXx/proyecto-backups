<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <div class="form-register">
        <h4>Back Up</h4>
        <form method="post">
            <input class="botons" type="submit" name="submit" value="Full Back Up">
            <input class="botons" type="submit" name="submit" value="Differential Back Up">
            <input class="botons" type="submit" name="submit" value="Incremental Back Up">
        </form>
        
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            switch ($_POST["submit"]) {
                case "Full Back Up":
                    header("Location: full.php");
                    break;
                case "Differential Back Up":
                    header("Location: differential.php");
                    break;
                case "Incremental Back Up":
                    header("Location: incremental.php");
                    break;
            }
        }
    ?>
</body>
</html>
