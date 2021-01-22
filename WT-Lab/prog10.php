<?php
    $db=mysqli_connect("localhost", "root", "") or error(mysqli_error());
    mysqli_select_db($db,"vemana") or error(mysqli_error($db));
    $id = $_POST[ 'id' ];
    $name = $_POST[ 'name' ];
    $age = $_POST[ 'age' ];
    $mob = $_POST[ 'mob' ];
    if( $id > 0 ) {
    $q=mysqli_query($db,"insert into student values('$id','$name','$age','$mob')");
    if($q) {
        echo "<script>
        alert('Inserted Successfully');
        window.location.href='prog10a.php';
        </script>";
    }
    else{    
        echo "<script>alert('Error in insertion');</script>";
        echo "<script>alert('Invalid student ID');</script>";
    }
}
?>