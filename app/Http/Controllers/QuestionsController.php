<?php

namespace App\Http\Controllers;

use App\Models\Quiz_questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class QuestionsController extends Controller
{
    public function index()
    {
        return view('questions.index');
    }
    public function create(Request $request)
    {
        $question = New Quiz_questions();
        $data = $request->input();
        $question->category_id = $data['category_id'];
        $question->question = $data['question'];
        $question->answer1 = $data['answer1'];
        $question->answer2 = $data['answer2'];
        $question->answer3 = $data['answer3'];
        $question->answer4 = $data['answer4'];
        $question->rightAnswer = $data['rightAnswer'];
        $question->save();

        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Question Created'
        ]);
        return Redirect::route('admin.quizQuestions');

    }
    public function edit(Request $request, $id)
    {
        $question = Quiz_questions::find($id);
        $data = $request->input();
        $question->category_id = $data['category_id'];
        $question->question = $data['question'];
        $question->answer1 = $data['answer1'];
        $question->answer2 = $data['answer2'];
        $question->answer3 = $data['answer3'];
        $question->answer4 = $data['answer4'];
        $question->rightAnswer = $data['rightAnswer'];
        $question->save();
        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Question updated'
        ]);
        return Redirect::back()->with(compact('question'));

    }
    public function destroy($id)
    {
        $question = Quiz_questions::find($id);
        $question->delete();
        Session::flash('alert', [
            'status' => 'success',
            'message' => 'Question deleted'
        ]);

        return redirect()->route('admin.quizQuestions')->with('success', 'Question deleted');
    }
}