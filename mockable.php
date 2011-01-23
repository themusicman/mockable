<?php  

class Mockable {
  
  public $mock              = NULL;
  
  protected $_name          = NULL;
  
  protected $_expectation   = NULL;
  
  
  /**
   * __construct
   *
   * @access public
   * 
   **/
  public function __construct($name, $mock) 
  {
      $this->_name = $name;
      $this->mock = $mock;
      return $this;
  }
  
  /**
   * mock
   *
   * @access public
   * 
   **/
  public function mock() 
  {
      return $this->mock;
  }

}

if (!function_exists('mock')) 
{
	function mock($mock_name) 
  {
      return Mock_Object::factory($mock_name);
  }
}

require_once "./mock/method.php";
require_once "./mock/attribute.php";
require_once "./mock/object.php";



