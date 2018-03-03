<?php
namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Author;

class AuthorController extends Controller {
    
    //Create new author
    public function create(Request $request){
        $validator = Validator::make($request->all(), Author::$rules);
        
        if ($validator->fails()) {  //Check for validations
            return response()->json(
                [
                    'code'=> 422,
                    'success'=> false,
                    'errors' => $validator->messages()
                ], 
                422);
        }else{  //Success
            $author = Author::create($request->all());
                return response()->json(
            [
            'code'=> 200, 
            'success'=> true, 
            'message'=> 'OK', 
            'data'=> $author
            ],
            200);
        }
    }
    
}
