<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'post_id' => 'required'
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
            $post = Comment::create([
                'comment' => $request->input('comment'),
                'post_id' => $request->input('post_id'),
                'status' => 0,
                'user_id' => $user
            ]);
            return response([
                'status' => true,
                'message' => 'Comment Will be visible once admin approved it!!!',
                'user' => $post
            ]);
        } catch (\Exception $exception) {
            return response([
                'status' => false,
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function ViewComments(Request $request)
    {
        $comments = Comment::with('user')->where('post_id', $request->post_id)->where('status', 1)->get();
        return response([
            'status' => true,
            'data' => $comments,
        ]);
    }
}
