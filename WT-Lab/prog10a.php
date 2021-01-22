<?php
$con=mysqli_connect("localhost", "root", "") or error(mysqli_error());
mysqli_select_db($con,"vemana") or error(mysqli_error());
$i=0;
$id=array();
$q = mysqli_query($con,"SELECT * from student" ) or error( mysqli_error());

if(mysqli_num_rows($q) > 0 ) {
    print "<h3>Student Information before sorting </h3>";
    print " <table border size=1>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile</th>
            </tr>";

    while($data=mysqli_fetch_row($q)) {
        $id[$i]=$data[0];
        print "<tr>
                <td>$data[0]</td>
                <td>$data[1]</td>
                <td>$data[2]</td>
                <td>$data[3]</td>
                </tr>";
        $i++;
    }
    echo "</table>";
    $id=sorting($id);
    echo "<h3>Sorted Data</h3><br/> ";
    echo "<table border='2'>
            <th>USN</th> 
            <th>NAME</th> 
            <th>AGE</th> 
            <th>MOBILE</th>";

    for($k=0;$k<count($id);$k++) {
        $sq="select * from student where stdid='$id[$k]'";
        $result=mysqli_query($con, $sq);
        if(mysqli_num_rows($result)>0) {
            if($row=mysqli_fetch_assoc($result))
            {   
                echo "<tr>";
                echo "<td>".$row['stdid']."</td>";
                echo "<td>".$row['stdname']."</td>";
                echo "<td>".$row['stdage']."</td>";
                echo "<td>".$row['stdmob']."</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
}
function sorting($list) {
    $len=count($list);
    $x=0;
    $y=0;
    for($y=0;$y<$len-1;$y++) {
        $min=$y;
        for($x=$y+1; $x< $len;$x++){ 
            if($list[$x]<$list[$min]){
                $min=$x;
            }
        }
        if($min!=$y) {
            $temp=$list[$y];
            $list[$y]=$list[$min];
            $list[$min]=$temp;
        }
    }
    return $list;
}
?>
