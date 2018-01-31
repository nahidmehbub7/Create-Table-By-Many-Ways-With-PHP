<?php

$student_heder = array('Name', 'Age','Roll', 'ID','Address');
$student_info = array(
     array("Naeem",19,209534,1, 'Bogra'),
     array("Enamul",20,209556,2, 'Naogoan'),
     array("Nahid",25,209563,3, 'Rajshahi'),
     array("Na",25,209563,4, 'Rangpur')
);

$total_header_column = count($student_heder);
$total_row = count($student_info);
$total_cloum = count($student_info[0]);


?>

<table>
  <tr>
     <?php 
     for ($h=0; $h < $total_header_column; $h++) { 
       ?>
       <th><?php echo $student_heder[$h]; ?></th>
       <?php
     }
     ?>
  </tr>
  <?php
    for ($i=0; $i < $total_row; $i++) { 
      ?>
      <tr>
        <?php
         for ($n=0; $n <$total_cloum ; $n++) { 
           ?>
           <td><?php echo $student_info[$i][$n]; ?></td>
           <?php
         }
        ?>
      </tr>
      <?php
    }
  ?>
</table>