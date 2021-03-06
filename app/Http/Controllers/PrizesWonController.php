<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Medias;
use App\Models\PrizesWins;
use App\Models\Product;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PrizesWonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        $data = $request->input();


                $ticket = new Tickets();
                $ticket->user_id = $user->id;
                $ticket->title = $data['prize'];
                $ticket->price = $data['price'];
                $ticket->save();
                $user->save();
                $my_winnings = Tickets::where('user_id', Auth::user()->id)->get();
                $my_products = Inventory::where('user_id', Auth::user()->id)->get();
                $medias = Medias::all();
                $my_tickets = Tickets::where('user_id', Auth::user()->id)->get();

                return view('frontend.customer.myInventory', compact('my_winnings', 'my_products', 'medias', 'my_tickets'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}