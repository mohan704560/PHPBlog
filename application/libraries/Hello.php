<?php 

class Hello{
    function test (){
       
        $CI = & get_instance();
        $CI->load->library("Email");
        echo "This is the hello library";
    }
}
?>