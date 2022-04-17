<?php 

// Question 01: solved
echo '// Question 01: solved';
$purchased_products = array(
     array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
     array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
     array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
     );

echo "<pre>";
print_r($purchased_products);
 
$total_qty = array_sum(array_column($purchased_products,'qty'));
$total_price = array_sum(array_column($purchased_products,'total_price'));

echo "<br> Total Quntty => {$total_qty} and Total prich => {$total_price}";

echo '<br><br><br><br><br><br>';










// Question 01: solved

echo '// Question 02: solved';


$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$new_arry = array_unique(array_merge($first_email_array,$second_email_array));
echo '<pre>';
print_r($new_arry);

echo '<br><br><br><br><br><br>';












// Question 03: solved

echo '// Question 03: solved';

$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

$question_three_ans = array_chunk($citylist, 4, true);

echo '<pre>';
print_r($question_three_ans);
