<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller
{   
    public function index(){
        echo "Index dari Controller Helloworld";
    }
    public function fungsi(){
        echo "Function fungsi dari Controller Helloworld";
    }
    public function parameters($nama){
        echo "Selamat datang ".$nama;
    }
}