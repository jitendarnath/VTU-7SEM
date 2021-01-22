<!DOCTYPE html>
<html>

<head>
    <title>simple calculator</title>
</head>

<body>
    <?php
        if (isset($_POST['opr'])) {
            $txt1=$_POST['n1'];
            $txt2=$_POST['n2'];
            $oprnd=$_POST['opr'];

        if($oprnd == "+") 
            $res=$txt1 + $txt2;
            
        else if($oprnd == "-")
            $res=$txt1 - $txt2; 
              
        else if ($oprnd == "x")
            $res=$txt1 * $txt2;
            
        else if ($oprnd == "/")
            $res=$txt1 / $txt2;
        }    
        
    ?>
    <h3> Simple Calculator </h3> <br />
    <form method="post" action="prog8a.php">
        Enter Number1:
        <input type="number" name="n1" value="<?php echo $txt1; ?>" />
        <br /> <br />
        Enter Number2:
        <input type="number" name="n2" value="<?php echo $txt2; ?>" />
        <br /><br />
        <input type="submit" name="opr" value="+">
        <input type="submit" name="opr" value="-">
        <input type="submit" name="opr" value="x">
        <input type="submit" name="opr" value="/">
        <br /> <br />
        Result:
        <input type="number" name="res" value="<?php echo $res; ?>" />
    </form>
</body>

</html>