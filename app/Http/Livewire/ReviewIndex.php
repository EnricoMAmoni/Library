<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewIndex extends Component
{

    public function deleteReview($id){
        Review::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.review-index', ['reviews'=> Review::all()]);
    }
}
