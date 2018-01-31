<?php

$student_info = array(
     array("Naeem",19,209534),
     array("Enamul",20,209556),
     array("Nahid",25,209563)
);

$array= array(
      array("Nayeem", 19,209534),
      array("Enamul", 20, 20946),
      array("Nahid", 16, 209563)
	);
// Output by Enanmul
echo $student_info[1][0];
echo '<br>';

// Output by Naeem
$name = $student_info[0][0];
$age = $student_info[0][1];
echo "My name is ".$name." ,My age is ".$age."<br>";

// Output by Nahid
echo $student_info[2][0];

echo '<br>';









// Display Student List
$table ='<table border="1">';
$table .='<caption>Student Info List</caption>';
$table .='<tr>';
$table .='<th>Name</th>';
$table .='<th>Age</th>';
$table .='<th>Roll</th>';
$table .='</tr>';

for ($i=0; $i < 3; $i++) { 
	$table .='<tr>';
       for ($e=0; $e < 3; $e++) { 
       	$table .='<td>'.$student_info[$i][$e].'</td>';
       }
	$table .='</tr>';
}
$table .='</table>';

echo $table;







// Display Student List
echo '<table border="1">';
echo'<caption>Student Info List</caption>';
echo'<tr>';
echo'<th>Name</th>';
echo'<th>Age</th>';
echo'<th>Roll</th>';
echo'</tr>';

for ($i=0; $i < 3; $i++) { 
	$table .='<tr>';
       for ($e=0; $e < 3; $e++) { 
       	echo'<td>'.$student_info[$i][$e].'</td>';
       }
	echo'</tr>';
}
echo'</table>';


?>










<table border="1" >
    <caption>Student Info List</caption>
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Roll</th>
	</tr>
    
    <?php 
    // For 1st part
    for ($i=0; $i < 3; $i++) { 
    ?>
    <tr>
     
        <?php
        // for 2nd part
    	for ($n=0; $n < 3; $n++) { 	
	    ?>

        <td><?php echo $student_info[$i][$n]; ?></td>

	    <?php } ?>


    </tr>
	<?php } ?>
	
</table>