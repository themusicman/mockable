<?php 

class Mock_Object {
  
  protected $_name        = NULL;
  
  protected $_methods     = array();
  
  protected $_attributes  = array();
  
  /**
   * __construct
   *
   * @access public
   * 
   **/
  public function __construct($name) 
  {
      $this->_name = $name;
  }
  
  /**
   * factory
   *
   * @access public
   * 
   **/
  public static function factory($name) 
  {
      return new Mock_Object($name);
  }

  
  /**
   * has_method
   *
   * @access public
   * 
   **/
  public function has_method($method_name) 
  {
      $method = new Mock_Method($method_name, $this);
      $this->_methods[$method_name] = $method;
      return $method;
  }
  
  
  /**
   * has_attribute
   *
   * @access public
   * 
   **/
  public function has_attribute($attribute_name) 
  {
      $attribute = new Mock_Attribute($attribute_name, $this);
      $this->_attributes[$attribute_name] = $attribute;
      return $attribute;
  }
  
  
  /**
   * __get
   *
   * @access public
   * 
   **/
  public function __get($name) 
  {
      if (array_key_exists($name, $this->_attributes))
      {
          return $this->_attributes[$name]->get_value();
      }
      else
      {
          //throw expection
          
      }
  }
  
  
  /**
   * __set
   *
   * @access public
   * 
   **/
  public function __set($name, $value) 
  {
      if (array_key_exists($name, $this->_attributes))
      {
          $this->_attributes[$name]->set_value($value);
      }
      else
      {
          //throw expection
          
      }
  }
  
  
  /**
   * __call
   *
   * @access public
   * 
   **/
  public function __call($method_name, $args) 
  {
      if (array_key_exists($method_name, $this->_methods))
      {
          // $method = $this->_methods[$method_name];
          // call_user_func_array(array($method, 'call'), $args);
          return $this->_methods[$method_name]->call();
      }
      else
      {
          //throw expection
          
      }
  }
  
  /**
   * __isset
   *
   * @access public
   * 
   **/
  public function __isset($name) 
  {
      return isset($this->_attributes[$name]);
  }
  
  /**
   * __unset
   *
   * @access public
   * 
   **/
  public function __unset($name) 
  {
      unset($this->_attributes[$name]);
  }
  
}