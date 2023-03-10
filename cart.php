<?php

if(isset($_POST['checkout'])) {

    // if POST returns no quantity_ items echo error message else run cart code
    $selected_items = array_filter($_POST, function($key) {
        return strpos($key, 'quantity_') === 0 && $_POST[$key] > 0;
    }, ARRAY_FILTER_USE_KEY);
    
    if (empty($selected_items)) {
        $error = 'Please select at least one item before checkout.';
    } else {
        // rest of the code for cart
    

    // create array
    $quantity = array();

    foreach($_POST AS $key => $value) { // when posted, name will be $key and quantity will be $value
        if (strpos($key, 'quantity_') === 0) { // find the position of the word/ identify the right strings
            $quantity[substr($key,9)] = $value; // subtract the first 9 letters of the string
        }
    }
    
    }
    // echo '<pre>';
    // print_r($quantity);
    // echo '</pre>';

}
