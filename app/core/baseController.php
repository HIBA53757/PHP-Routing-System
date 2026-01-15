<?php 
namespace app\core ;

class baseController {
    


 public function view($viewName, $data = [])
    {
        $viewFile = __DIR__."/../views/" . $viewName . ".php";

        

        if (file_exists($viewFile)) {
            extract($data);
            require_once $viewFile;
        } else {
            echo "Error: view file not found";
        }
    }


}