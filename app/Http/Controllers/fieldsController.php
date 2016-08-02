<?php

namespace App\Http\Controllers;

use App\Field;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class fieldsController extends Controller
{
    /**
     * get size of post request parameters
     * call insert method from controller
     */
    public function index()
    {
        $field = new Field();
        $size = count($_POST['name']);
        for($i=0; $i<$size; $i++){
            $field->insert($_POST['name'][$i]);
        }
        echo 'Fields Inserted!';
    }


}
