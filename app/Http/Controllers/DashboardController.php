<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prizes;
use App\Models\PrizesWins;
use App\Models\Quiz_questions;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function users()
    {
        $users = User::all();
        return view('admin.users')->with(compact('users'));
    }
    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.editUser')->with(compact('user'));
    }
    public function prizes()
    {
        $prizes = Prizes::all();
        return view('admin.prizes')->with(compact('prizes'));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories')->with(compact('categories'));
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.editCategory')->with(compact('category'));
    }
    public function createCategory()
    {
        return view('admin.createCategory');
    }

    public function editPrize($id)
    {
        $prize = Prizes::find($id);
        return view('admin.editPrize')->with(compact('prize'));
    }
    public function prizesWon()
    {
        $prizes_won = PrizesWins::all();
        return view('admin.prizesWon')->with(compact('prizes_won'));
    }
    public function quizQuestions()
    {
        $questions = Quiz_questions::all();
        return view('admin.quizQuestions')->with(compact('questions'));
    }
    public function editquizQuestion($id)
    {
        $question = Quiz_questions::find($id);
        return view('admin.editQuizQuestion')->with(compact('question'));
    }
    public function createQuestion()
    {
        return view('admin.createQuestion');
    }


}