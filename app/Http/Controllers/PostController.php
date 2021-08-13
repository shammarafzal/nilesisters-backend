<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post' => 'required',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return collect([
                'status' => false,
                'message' => $message->first()
            ]);
        }
        try {
            $user = Auth::id();
            $post = Post::create([
                'post' => $request->input('post'),
                'user_id' => $user
            ]);
            return response([
                'status' => true,
                'message' => 'Post Added',
                'post' => $post
            ]);
        } catch (\Exception $exception) {
            return response([
                'status' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function ViewPosts()
    {
        $posts = Post::with('user')->where('is_approved', 1)->get();
        return response([
            'status' => true,
            'data' => $posts,
        ]);
    }
}
