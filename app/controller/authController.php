<?php 
namespace app\controller ; 
use app\core\baseController;

class AuthController extends baseController {
    public function find($id){
        // echo "test. ID = $id";

        $data = [
            ["name"=>"hiba"],
            ["name"=>"yassin"],
            ["name"=>"mohamed"],
            ["name"=>"mehdi"],
            ["name"=>"ayoub"],
        ];

        $this->view("user",["users"=>$data , "id"=>$id]);
    }
}
