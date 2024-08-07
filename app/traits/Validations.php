<?php 
namespace app\traits;

use app\core\Request;

trait Validations
{
    public function unique()
    {
        # code...
    }

    public function email()
    {
        # code...
    }

    public function required($field)
    {
        $data = Request::input($field);
        if(empty($data))
        {
            return null;
        }
    }

    public function maxLen($field, $param)
    {
        // dd($param);
        $data = Request::input($field);
        if(strlen($data)>$param)
        {
            return null;
        }
        dd($data);
    }
}


?>