<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz_questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
    }

}