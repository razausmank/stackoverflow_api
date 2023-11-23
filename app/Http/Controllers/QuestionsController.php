<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function getAllQuestions(){
        $array = [
            [
              'title'=> "How to get lorem ipsum to instantiate on multiple lines instead of 1 in VS Code?",
              'body'=> "In VS Code if I type lorem and then press enter it will generate a paragraph of lorem ipsum. The only problem is that the paragraph comes out as one very long line of text as opposed to several lines in the text editor. Is there a setting I can change so that it automatically generates my lorem ipsum on multiple lines?",
              'tags'=> "html visual-studio-code lorem-ipsum",
            ],
            [
              'title'=> "How to get lorem ipsum to instantiate on multiple lines instead of 1 in VS Code?",
              'body'=> "In VS Code if I type lorem and then press enter it will generate a paragraph of lorem ipsum. The only problem is that the paragraph comes out as one very long line of text as opposed to several lines in the text editor. Is there a setting I can change so that it automatically generates my lorem ipsum on multiple lines?",
              'tags'=> "html visual-studio-code lorem-ipsum",
            ],
            [
              'title'=> "How to get lorem ipsum to instantiate on multiple lines instead of 1 in VS Code?",
              'body'=> "In VS Code if I type lorem and then press enter it will generate a paragraph of lorem ipsum. The only problem is that the paragraph comes out as one very long line of text as opposed to several lines in the text editor. Is there a setting I can change so that it automatically generates my lorem ipsum on multiple lines?",
              'tags'=> "html visual-studio-code lorem-ipsum",
            ],
            [
              'title'=> "How to get lorem ipsum to instantiate on multiple lines instead of 1 in VS Code?",
              'body'=> "In VS Code if I type lorem and then press enter it will generate a paragraph of lorem ipsum. The only problem is that the paragraph comes out as one very long line of text as opposed to several lines in the text editor. Is there a setting I can change so that it automatically generates my lorem ipsum on multiple lines?",
              'tags'=> "html visual-studio-code lorem-ipsum",
            ],
          ] ;

        return response($array);
    }
}
