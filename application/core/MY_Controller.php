<?php 

class MY_Controller extends CI_Controller{
    public function myTest(){
        echo "You are viewing the mytest function in my_controller";
    }
}
class AdminController extends MY_Controller{
    public function test(){
        echo "I am the part of the Admin controller";
    }
}
?>