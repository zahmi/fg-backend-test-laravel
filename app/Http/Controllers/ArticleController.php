<?php
namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Validator;
use App\Article;
use App\Author;

class ArticleController extends Controller {

	//Create new article
    public function create(Request $request){
       $validator = Validator::make($request->all(), Article::$rules);
        
       $author  = Author::find($request->get('author_id'));
      
        if ($validator->fails()) {  //Check for validations
            return response()->json(
            [
                'code'=> 400,
                'success'=> false,
                'errors' => $validator->messages()
            ], 
            400);
        }else if (!$author){    //Check if author exists
            return response()->json(
            [
                'code'=> 400,
                'success'=> false,
                'error' => "Invalid author id {$request->get('author_id')}"
            ],
             400);
            
        }else{  //Success
            $article = Article::create($request->all());
                return response()->json(
                [
                    'code'=> 201, 
                    'success'=> true, 
                    'message'=> 'OK', 
                    'data'=> $article
                ],
                201);
        }
    }

    //Update article by id
    public function update(Request $request, $id){
        $article  = $article = Article::find($id);

       if (!$article){
           return response()->json(
            [
                'code'=> 400,
                'success'=> false,
                'error' => "Invalid article id {$id}"
            ],
            400);
       }

       $author  = Author::find($request->get('author_id'));
       if (!$author){
           return response()->json(
            [
                'code'=> 400,
                'success'=> false,
                'error' => "Invalid author id {$request->get('author_id')}"
            ],
            400);
       }

       $validator = Validator::make($request->all(), Article::$rules);

       if ($validator->fails()) {
            return response()->json(
            [
                'code'=> 400,
                'success'=> false,
                'errors' => $validator->messages()
            ], 
            400);
        }else{
            $record = $request->all();
            $article->update($record);
                return response()->json(
                [
                    'code'=> 200, 
                    'success'=> true, 
                    'message'=> 'Updated successfully!', 
                    'data'=> $article
                ],
                200);
        }
    }

    public function all(){
        $articles  = Article::with('author')->get();
        
    	return response()->json(
            [
                'code'=> 200, 
                'success'=> true, 
                'message'=> 'OK', 
                'data'=> $articles
            ],
            200);
    }
}