<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\views;
use App\User;
use App\Comment;

class PollController extends Controller
{
    //
    public function index(){
    	$id = Auth::user()->id;
    	$roll = Auth::user()->rollno;
    	$user = User::get();
    	$notifications = views::where('depmate',$roll)->where('read','1')->latest()->get()->toArray();
    	$comment_notification = Comment::where('roll', $roll)->where('seen', '1')->where('user_id', '!=', $id)
        ->latest()->get()->toArray();
    	return view('polls',compact('notifications','comment_notification','user'));
    }
}
