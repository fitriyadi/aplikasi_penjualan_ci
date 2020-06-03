<?php
class Template{
    protected $_CI;
    
    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        
        $data['_sidebar']=$this->_CI->load->view('template/sidebar',$data,true);
        $this->_CI->load->view('/template.php',$data);
    }
}