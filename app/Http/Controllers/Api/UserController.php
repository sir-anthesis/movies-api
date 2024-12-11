<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): UserResource
    {
        //get all posts
        $posts = User::latest()->paginate(5);

        //return collection of posts as a resource
        return new UserResource(true, 'List Data Posts', $posts);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'     => 'required|email',
            'password'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = User::create([
            'name'     => $request->name,
            'email'     => $request->email,
            'password'   => $request->password,
        ]);

        //return response
        return new UserResource(true, 'Successed add user data!', $post);
    }

    public function show($id)
    {
        //find post by ID
        $post = User::find($id);

        //return single post as a resource
        return new UserResource(true, 'Detail data user!', $post);
    }

    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'   => 'required|email',
            'password'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = User::find($id);

        //update post without image
        $post->update([
            'name'     => $request->name,
            'email'   => $request->email,
            'password'   => $request->password,
        ]);

        //return response
        return new UserResource(true, 'Successed update user data!', $post);
    }

    public function destroy($id)
    {

        //find post by ID
        $post = User::find($id);

        //delete post
        $post->delete();

        //return response
        return new UserResource(true, 'Successed delete user data!', null);
    }
}
