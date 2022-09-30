<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class EditReview extends Component
{
    public $reviewId;
    public $title;
    public $review;
    public $score;
    public function mount($reviewId){
        $review = Review::find($this->reviewId);
        $this->title = $review -> title;
        $this->review = $review -> review;
        $this->score = $review -> score;


    }

    public function updateReview(){
        $review = Review::find($this->reviewId);
        $review->update([
            'title' => $this->title,
            'review' => $this -> review,
            'score' => $this -> score,
        ]);

        return redirect(route('indexReview'));
    }


    public function render()
    {
        return view('livewire.edit-review');
    }
}
