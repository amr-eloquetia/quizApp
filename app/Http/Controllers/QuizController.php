<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use App\Models\Prizes;
use App\Models\PrizesWins;
use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
    public function endQuiz(Request $request, $id)
    {
        // dd($request->all());
        $user = Auth::user();
        $data = $request->input();


                $result = new Results();
                $result->user_id = $user->id;

                $score = 0;
                $answer_id = 0;
                foreach($data as $key => $value){
                    if($key == 'answer'.$answer_id){
                        if($value == $data['answerRight'.$answer_id]){
                            $score += 10;
                        }
                        $answer_id++;
                    }
                }
                $result->my_score = $score;
                $result->save();


        $my_result = Results::where('user_id', $user->id)->latest()->first();

        $prizes =Prizes::where('id', '1')->first();
        if($user->tokens>=$prizes->price){
        $prizes =Prizes::where('id', '1')->first();
        $medias = Medias::where('prize_id', $prizes->id)->get();

        $totalCosts = PrizesWins::where('price',$prizes->price)->sum('price');
            $user->tokens -= $prizes->price;
            $user->tokens_spent += $prizes->price;
            $user->save();
            return View('bronzeWheel',compact('my_result','prizes','totalCosts','medias'));
        }

        // if($id == '1'){
        //     $prizes =Prizes::where('id', '1')->first();
        //     if($user->tokens>=$prizes->price){
        //     $prizes =Prizes::where('id', '1')->first();
        //     $medias = Medias::where('prize_id', $prizes->id)->get();

        //     $totalCosts = PrizesWins::where('price',$prizes->price)->sum('price');
        //         $user->tokens -= $prizes->price;
        //         $user->tokens_spent += $prizes->price;
        //         $user->save();
        //         return View('bronzeWheel',compact('my_result','prizes','totalCosts','medias'));
        //     }
        //     else{
        //         return Redirect::route('buyTokens.get')->with('error', 'You do not have enough tokens');
        //     }

        // }elseif($id == '2'){
        //     $prizes =Prizes::where('id', '2')->first();
        //     if($user->tokens>=$prizes->price){
        //         $prizes =Prizes::where('id', '2')->first();
        //         $medias = Medias::where('prize_id', $prizes->id)->get();

        //         $totalCosts = PrizesWins::where('price',$prizes->price)->sum('price');
        //         $user->tokens -= $prizes->price;
        //         $user->tokens_spent += $prizes->price;
        //         $user->save();
        //         return View('silverWheel',compact('my_result','prizes','totalCosts','medias'));
        //     }
        //     else{
        //         return Redirect::route('buyTokens.get')->with('error', 'You do not have enough tokens');
        //     }
        // }elseif($id == '3'){
        //     $prizes =Prizes::where('id', '3')->first();
        //     if($user->tokens>=$prizes->price){
        //         $medias = Medias::where('prize_id', $prizes->id)->get();

        //         $totalCosts = PrizesWins::where('price',$prizes->price)->sum('price');
        //         $user->tokens -= $prizes->price;
        //         $user->tokens_spent += $prizes->price;
        //         $user->save();
        //         return View('goldenWheel',compact('my_result','prizes','totalCosts','medias'));
        //     }
        //     else{
        //         return Redirect::route('buyTokens.get')->with('error', 'You do not have enough tokens');
        //     }
        // }else{
        //     $prizes =Prizes::where('id', '4')->first();
        //     if($user->tokens>=$prizes->price){
        //         $medias = Medias::where('prize_id', $prizes->id)->get();

        //         $totalCosts = PrizesWins::where('price',$prizes->price)->sum('price');
        //         $user->tokens -= $prizes->price;
        //         $user->tokens_spent += $prizes->price;
        //         $user->save();
        //         return View('spinWheel',compact('my_result','prizes','totalCosts','user','medias'));
        //     }
        //     else{
        //         return Redirect::route('buyTokens.get')->with('error', 'You do not have enough tokens');
        //     }
        // }

    }

}