<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Review;
use App\Models\Review as enter;


class Review extends Component
{


    public $title;
    public $review;
    public $score;

    /* funzione per il salvataggio dei dati in tabella */
    public function createReview(){
        enter::create([
            "title"=>$this->title,
            "review"=>$this->review,
            "score"=>$this->score,
        ]);
        $this->cleanForm();
    }

    /* funzione per pulizia form dopo il submit */
    public function cleanForm(){
        $this->title = "";
        $this->review = "";
        $this->score = "";
    }

    /* mo famo le validation */


    public function render()
    {
        return view('livewire.review');
    }
}
