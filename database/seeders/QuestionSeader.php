<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'Where is the capital of Finland?',
            'answer1' => 'Talinn',
            'answer2' => 'Helsinki',
            'answer3' => 'Riga',
            'answer4' => 'Minsk',
            'rightAnswer' => 'Helsinki',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What is the biggest animal in the world?',
            'answer1' => 'Elephant',
            'answer2' => 'Giraffe',
            'answer3' => 'Rhino',
            'answer4' => 'Blue whale',
            'rightAnswer' => 'Blue whale',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'Which country is brie cheese originally from?',
            'answer1' => 'Belgium',
            'answer2' => 'Netherlands',
            'answer3' => 'France',
            'answer4' => 'Switzerland',
            'rightAnswer' => 'France',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'Which planet is closest to the sun?',
            'answer1' => 'Earth',
            'answer2' => 'Mercury',
            'answer3' => 'Venus',
            'answer4' => 'Mars',
            'rightAnswer' => 'Mercury',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What is the largest country in the world?',
            'answer1' => 'USA',
            'answer2' => 'China',
            'answer3' => 'Russia',
            'answer4' => 'Brasil',
            'rightAnswer' => 'Russia',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What does "Pb" stand for on the periodic table?',
            'answer1' => 'Platinum',
            'answer2' => 'Lead',
            'answer3' => 'Palladium',
            'answer4' => 'Phosphorus',
            'rightAnswer' => 'Lead',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What relationship were Monica and Ross in Friends?',
            'answer1' => 'Lovers',
            'answer2' => 'Friends',
            'answer3' => 'Siblings',
            'answer4' => 'Cousins',
            'rightAnswer' => 'Siblings',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What does the AC button on a calculator stand for?',
            'answer1' => 'All count',
            'answer2' => 'After count',
            'answer3' => 'All clear',
            'answer4' => 'After clear',
            'rightAnswer' => 'All clear',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'What is the smallest country in the world?',
            'answer1' => 'Vatikan',
            'answer2' => 'San Marino',
            'answer3' => 'Andorra',
            'answer4' => 'Gibraltar',
            'rightAnswer' => 'Vatikan',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 1,
            'question' => 'Which country produces marijuana the most?',
            'answer1' => 'Afghanistan',
            'answer2' => 'Spain',
            'answer3' => 'Lebanon',
            'answer4' => 'Morocco',
            'rightAnswer' => 'Morocco',
        ]);



        DB::table('quiz_questions')->insert([
            'category_id' => 2,
            'question' => 'Where is the capital of Finland?',
            'answer1' => 'Talinn',
            'answer2' => 'Helsinki',
            'answer3' => 'Riga',
            'answer4' => 'Minsk',
            'rightAnswer' => 'Helsinki',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 2,
            'question' => 'What is the biggest animal in the world?',
            'answer1' => 'Elephant',
            'answer2' => 'Giraffe',
            'answer3' => 'Rhino',
            'answer4' => 'Blue whale',
            'rightAnswer' => 'Blue whale',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 2,
            'question' => 'Which country is brie cheese originally from?',
            'answer1' => 'Belgium',
            'answer2' => 'Netherlands',
            'answer3' => 'France',
            'answer4' => 'Switzerland',
            'rightAnswer' => 'France',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 3,
            'question' => 'What does the AC button on a calculator stand for?',
            'answer1' => 'All count',
            'answer2' => 'After count',
            'answer3' => 'All clear',
            'answer4' => 'After clear',
            'rightAnswer' => 'All clear',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 3,
            'question' => 'What is the smallest country in the world?',
            'answer1' => 'Vatikan',
            'answer2' => 'San Marino',
            'answer3' => 'Andorra',
            'answer4' => 'Gibraltar',
            'rightAnswer' => 'Vatikan',
        ]);
        DB::table('quiz_questions')->insert([
            'category_id' => 3,
            'question' => 'Which country produces marijuana the most?',
            'answer1' => 'Afghanistan',
            'answer2' => 'Spain',
            'answer3' => 'Lebanon',
            'answer4' => 'Morocco',
            'rightAnswer' => 'Morocco',
        ]);

    }
}