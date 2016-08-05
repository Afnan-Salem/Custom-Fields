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
            echo 'Fields Inserted!';

        }
    }

    /**
     * show Fields List
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $field = new Field();
        $rows = $field -> show();
        return view('form',['rows'=>$rows]);
    }

    /**
     * delete fields from list
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $field = new Field();
        $field->delete_Field($request->id);
        return redirect()->back();
    }

    /**
     * edit fields
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request)
    {
        $field = new Field();
        $field->edit($request->id,Input::get('name'));
        return redirect()->back();

    }


}
?>