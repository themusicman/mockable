<?php 

class Mock_Method extends Mockable {
    
    /**
     * which_returns
     *
     * @access public
     * 
     **/
    public function which_returns($return_value) 
    {
        $this->_expectation = $return_value;
        return $this;
    }
    
    /**
     * call
     *
     * @access public
     * 
     **/
    public function call() 
    {
        return $this->_expectation;
    }
    
}
