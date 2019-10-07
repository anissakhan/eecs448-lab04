<?php
echo "<table>";
        for ($row=0; $row<=100; $row++)//outer loop
        {
           echo "<tr>"; //begin new table row
           if($row==0)
           {
              echo "<th> </th>";//if row is 0 print a space so 0 doesn't appear
           }
           if($row!=0)
           {
              echo "<th>$row</th>";//puts extra column of 1-100 in first col
           }
           for ($col=1; $col<=100; $col++)//inner loop
           {
             if($row==0)
             {
                $top=$col;
                echo "<td>$top</td>";//reads out an extra row of 1-100 on top of table
             }  
             else
             {  
               $product=$row*$col;
               echo "<td>$product</td>";
             }  
           }//end inner loop
           echo "</tr>";//end that row
        }//end outer loop
echo "</table>";
?>