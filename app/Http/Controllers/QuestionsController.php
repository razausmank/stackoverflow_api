<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){

        $questions = Question::all();
        return response($questions);
    }

    public function store( Request $request )
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'tags' => 'required|string'
        ]);

        $question = Question::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        $tags = explode(' ', $request->tags);

        // Remove extra spaces using array_map and trim
        $tags = array_map('trim', $tags);

        // Remove empty elements
        $tags = array_filter($tags);

        $tags_id = [] ;
        foreach ($tags as $tag) {
            $new_tag = Tag::firstOrCreate(['name' => $tag]);
            array_push($tags_id,$new_tag->id);
        }

        $question->tags()->attach($tags_id);
        return $question;
    }
}
