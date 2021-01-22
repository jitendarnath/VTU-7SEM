<!DOCTYPE html>
<html>
<head>
<title>Digital Clock</title>
</head>
<body>
<h1> Digital clock </h1>
<h3>
    <?php
        echo "The time from the server is " .date("h:i:sa");
        header("Refresh: 1; url=prog7.php");
    ?>
</h3>
</body>
</html>