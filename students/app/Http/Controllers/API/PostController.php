<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // $_REQUEST = $_POST + $_GET
    //

    public function index(){
        echo __METHOD__;
    }

    /*
     * Request $request truyền vào phương thức add nó bắt buộc
     * phải là 1 object của class Request
     * class Request là class thuộc namespace Illuminate\Http\Request
     * */
    public function add(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $inputAll = $request->all();

        $dataSave = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];
        // dd($dataSave);

        $post = new Post($dataSave);
        $post->save();
    }
}
