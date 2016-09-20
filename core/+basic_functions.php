<?php 
    $system['function_list'] = [];

    $system['function_list'][] = 'scr_approach_val';
    function scr_approach_val($value, $app_to, $inc_val = 1){
        if($value < $app_to-$inc_val){
            $value += $inc_val;
        } else if($value > $app_to+$inc_val){
            $value -= $inc_val;
        } else {
            $value = $app_to;
        }
        return $value;
    }
    
    $system['function_list'][] = 'redirect_to';
    function redirect_to($new_location){
        header("Location: " . $new_location);
        exit;
    }
    
    $system['function_list'][] = 'form_errors';
    function form_errors($errors=array()) {
	$output = "";
	if (!empty($errors)) {
	  $output .= "<div class=\"error\">";
	  $output .= "Please fix the following errors:";
	  $output .= "<ul>";
	  foreach ($errors as $key => $error) {
	    $output .= "<li>{$error}</li>";
	  }
	  $output .= "</ul>";
	  $output .= "</div>";
	}
	return $output;
    }
    
    $system['function_list'][] = 'has_presence';
    function has_presence($value) {
	return isset($value) && $value !== "";
    }