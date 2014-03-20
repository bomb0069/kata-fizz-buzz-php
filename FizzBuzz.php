<?php

class FizzBuzz {

    function getString($input) {
    	if ($input % 3 == 0)
    		return 'Fizz';
        elseif ($input % 5 == 0)
            return 'Buzz';
    	return $input;
    }
}

?>
