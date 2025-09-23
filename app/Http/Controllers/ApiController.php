<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function doYouKnow()
    {
        return response()->json([
            'status' => true,
            'text' => [
                'id' => 1,
                'text1' => 'Eating with distractions',
                'text2' => 'Higher rates of healthy food refusal',
                'answer' => 'One study found that kids were twice as likely to become picky eaters when they ate with distractions'
            ]
        ]);
    }

    public function flashCard()
    {
        return response()->json([
            'status' => true,
            'flashcards' => [
                    'id' => 1, 
                    'question' => 'What Qualifies as Distractions?', 
                    'answer' => "Toys and screens? Obvious distractions. But so are: \n- \"Open your mouth! Here comes an aeroplane wooooo!!\" \n- \"Look there's a bird!\", as the bite goes in <child name>'s mouth. \n- \"I'm closing my eyes. Let me see who comes to take a bite: you or the cat!\""
            ]
        ]);
    }
}
