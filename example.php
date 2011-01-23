<?php

require 'mockable.php';
  
  function _debug($content, $echo = TRUE) 
  {
    	$response = var_export($content, TRUE);
    	$response .= "\n";

    	if ($echo)
    	{
    	    echo $response;
    	}
    	else
    	{
    	    return $response;
    	}
  }

  
  $test = mock('tester');
    
  $test->has_method('find')
       ->which_returns(
                        mock('person')
                          ->has_attribute('name')
                          ->with_value('Lisa')
                          ->mock()
                          ->has_method('test')
                          ->which_returns('abc')
                          ->mock()
                      );  
  
  $test->has_attribute('name')->with_value('Thomas');
  
  _debug($test->name);
  
  _debug(isset($test->name));
  
  _debug(isset($test->job));
  
  unset($test->name);
  
  _debug($test->name);
  
  _debug($test->find()->test());

?>