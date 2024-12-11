<?php

namespace App\Http\Controllers\Api;

use App\Models\WatchList;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WatchListController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): UserResource
    {
        //get all posts
        $posts = WatchList::latest()->paginate(5);

        //return collection of posts as a resource
        return new UserResource(true, 'List Data Posts', $posts);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'user_id'     => 'required',
            'movies'     => 'required',
            'note'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $post = WatchList::create([
            'user_id'     => $request->user_id,
            'movies'     => $request->movies,
            'note'   => $request->note,
            'created_at'   => now(),
        ]);

        //return response
        return new UserResource(true, 'Successed add watch list!', $post);
    }

    // WatchListController.php
    public function show($id)
    {
        $watchList = WatchList::find($id);

        // Split the movies into an array
        $movieIds = explode(',', $watchList->movies);

        // Retrieve movie details based on the comma-separated list
        $movies = Movies::whereIn('id', $movieIds)->get();

        $post = [
            'id' => $watchList->id,
            'user_id' => $watchList->user_id,
            'movies' => $movies,  // Return movie details
            'note' => $watchList->note,
            'created_at' => $watchList->created_at,
            'updated_at' => $watchList->updated_at,
        ];

        return new UserResource(true, 'Detail data watch list!', $post);
    }


    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'note'     => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = WatchList::find($id);

        //update post
        $post->update([
            'note'     => $request->note,
        ]);

        //return response
        return new UserResource(true, 'Successed update watch list!', $post);
    }

    public function destroy($id)
    {

        //find post by ID
        $post = WatchList::find($id);

        //delete post
        $post->delete();

        //return response
        return new UserResource(true, 'Successed delete watch list!', null);
    }
}
