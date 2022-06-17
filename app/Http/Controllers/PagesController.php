<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Medias;
use App\Models\PrizesWins;
use App\Models\Product;
use App\Models\Quiz_questions;
use App\Models\Results;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function loginPage ()
    {
        return view('auth.login');
    }
    public function registerPage ()
    {
        return view('auth.register');
    }
    public function quiz($id)
    {
        $questions = Quiz_questions::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('quiz', compact('questions', 'category'));

    }
    public function bronzeWheel()
    {
        $user = Auth::user();
        $my_result = Results::latest()->first();

        return view('bronzeWheel', compact('my_result'));
    }
    public function silverWheel()
    {
        $user = Auth::user();
        $my_result = Results::latest()->first();

        return view('silverWheel', compact('my_result'));
    }
    public function goldenWheel()
    {
        $user = Auth::user();
        $my_result = Results::latest()->first();

        return view('goldenWheel', compact('my_result'));
    }
    public function spinWheel()
    {
        $user = Auth::user();
        $my_result = Results::latest()->first();

        return view('spinWheel', compact('my_result'));
    }
    public function myAccount()
    {
        $my_winnings = PrizesWins::where('user_id', Auth::user()->id)->get();
        return view('frontend.customer.myAccount', compact('my_winnings'));
    }
    public function congrats($name)
    {
        $my_winnings = PrizesWins::where('user_id', Auth::user()->id)->latest()->first();
        return view('frontend.customer.congrats', compact('my_winnings'));
    }
    public function buyTokens()
    {
        return view('frontend.customer.buyTokens');
    }
    public function shop()
    {
        $medias = Medias::all();
        $products = Product::all();
        return view('shop' , compact('products', 'medias'));
    }
    public function myInventory()
    {
        $my_winnings = PrizesWins::where('user_id', Auth::user()->id)->get();
        $my_products = Inventory::where('user_id', Auth::user()->id)->get();
        $my_tickets = Tickets::where('user_id', Auth::user()->id)->get();
        $medias = Medias::all();

        return view('frontend.customer.myInventory' , compact('my_winnings', 'my_products', 'medias', 'my_tickets'));
    }



}