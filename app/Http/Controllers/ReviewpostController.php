<?php

namespace App\Http\Controllers;

use App\Models\Reviewpost;
use App\Models\Tag;
use Illuminate\Http\Request;

class ReviewpostController extends Controller
{
    // このメソッドはいじらないでください。
    public function index(Reviewpost $reviewpost)
    {
        return $reviewpost->get();
    }

    public function indexText(Reviewpost $post)
    {
        return view('test/index')->with(['posts' => $post->get()]);
    }

    public function showText(Reviewpost $post, Tag $tag)
    {
        return view('test/show')->with(['post' => $post,'name' => $tag]);
    }

    // legendメソッドを完成させなさい
    public function legend(Reviewpost $post, Tag $tag)
    {
        return view('test/legend')->with(['post' => $post,'tag' => $tag]);
    }
}