<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){

        $data = Post::with(['category', 'tags'])->paginate(5);

        return response()->json($data);
    }

}
