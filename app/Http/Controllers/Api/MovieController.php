<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): UserResource
    {
        //get all posts
        $posts = Movies::latest()->paginate(5);

        //return collection of posts as a resource
        return new UserResource(true, 'List data movies', $posts);
    }

    public function show($id)
    {
        //find post by ID
        $post = Movies::find($id);

        //return single post as a resource
        return new UserResource(true, 'Detail data movie!', $post);
    }
}
