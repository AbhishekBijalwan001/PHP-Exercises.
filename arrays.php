<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ['Veggie fries','Chole Bhature','Rasmalai','Roasted Tikka'];

/*
Print every array element in a new line.
*/
echo $food[0];
echo '<br>';

echo $food[1];
echo '<br>';

echo $food[2];
echo '<br>';

echo $food[3];
echo '<br>';
    

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo '<ul>';
    
echo '<li>';
echo $food[0];
echo '</li>';
    
    
echo '<li>';
echo $food[1];
echo '</li>';
    

echo '<li>';
echo $food[2];
echo '</li>';
    

echo '<li>';
echo $food[3];
echo '</li>';
    
echo '</ul>';


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc[$food[0]] = 'Veg salad';

$food_assoc[$food[1]] = 'Punjabi Meal';

$food_assoc[$food[2]] = 'Desert';

$food_assoc[$food[3]] = 'Tandoori';

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo $food[0].' | '. $food_assoc[$food[0]];
echo '<br>';

echo $food[1].' | '. $food_assoc[$food[1]];
echo '<br>';

echo $food[2].' | '. $food_assoc[$food[2]];
echo '<br>';

echo $food[3].' | '. $food_assoc[$food[3]];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc[$food[0]] = ['type'=>'Veg salad',  'origin'=>'Delhi, India'];

$food_assoc[$food[1]] = ['type'=>'Punjabi Meal',  'origin'=>'Punjab, India'];

$food_assoc[$food[2]] = ['type'=>'Desert',  'origin'=>'Indian subcontinent, India'];

$food_assoc[$food[3]] = ['type'=>'Tandoori',  'origin'=>'India'];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food[0].' | '. $food_assoc[$food[0]]['type'].' | '. $food_assoc[$food[0]]['origin'];
echo '<br>';

echo $food[1].' | '. $food_assoc[$food[1]]['type'].' | '. $food_assoc[$food[1]]['origin'];
echo '<br>';

echo $food[2].' | '. $food_assoc[$food[2]]['type'].' | '. $food_assoc[$food[2]]['origin'];
echo '<br>';

echo $food[3].' | '. $food_assoc[$food[3]]['type'].' | '. $food_assoc[$food[3]]['origin'];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/

echo '<table>';

echo '<tr>';
echo '<th>Food</th>';
echo '<th>Type</th>';
echo '<th>Origin</th>';
echo '</tr>';

echo '<tr>';
echo '<td>'.$food[0].'</td>';
echo '<td>'.$food_assoc [$food[0]]['type'].'</td>';
echo '<td>'.$food_assoc [$food[0]]['origin'].'</td>';
echo '</tr>';


echo '<tr>';
echo '<td>'.$food[1].'</td>';
echo '<td>'.$food_assoc [$food[1]]['type'].'</td>';
echo '<td>'.$food_assoc [$food[1]]['origin'].'</td>';
echo '</tr>';


echo '<tr>';
echo '<td>'.$food[2].'</td>';
echo '<td>'.$food_assoc [$food[2]]['type'].'</td>';
echo '<td>'.$food_assoc [$food[2]]['origin'].'</td>';
echo '</tr>';


echo '<tr>';
echo '<td>'.$food[3].'</td>';
echo '<td>'.$food_assoc [$food[3]]['type'].'</td>';
echo '<td>'.$food_assoc [$food[3]]['origin'].'</td>';
echo '</tr>';

echo '</table>';
?>