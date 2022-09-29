<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Review;


class Review extends Component
{


    public $title;
    public $review;
    public $score;













    public function render()
    {
        return view('livewire.review');
    }
}
