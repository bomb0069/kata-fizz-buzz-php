<?php

class FizzBuzz {

    function getString($input) {
    	if ($input == 3)
    		return 'Fizz';
        elseif ($input == 5)
            return 'Buzz';
    	return $input;
    }
}

?>
