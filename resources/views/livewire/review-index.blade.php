<div>
    @foreach ($reviews as $review)
        <div class="row">
            <h3>{{$review->title}} - {{$review->score}}</h3>
            <p>{{$review->review}}</p>
            <button class="btn btn-danger delete"
            wire:click="deleteReview({{$review->id}})">Elimina</button>
            <a href="{{route('editReview', compact('review'))}}"><button type="button" class="btn btn-primary delete">Modifica</button></a>
        </div>
    @endforeach
</div>
