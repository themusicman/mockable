<?php 

class Mock_Attribute extends Mockable {
  
  
  /**
   * set_value
   *
   * @access public
   * 
   **/
  public function set_value($value) 
  {
      $this->_expectation = $value;
      return $this;
  }
  
  /**
   * get_value
   *
   * @access public
   * 
   **/
  public function get_value() 
  {
    return $this->_expectation;
  }
  
  /**
   * with_value
   *
   * @access public
   * 
   **/
  public function with_value($value) 
  {
      $this->set_value($value);
      return $this;
  }
  
}