

<form wire:submit.prevent="createReview">
      <div class="mb-3">
        <label class="form-label">Titolo recensione</label>
        <input type="text" class="form-control" wire:model="title">
      </div>
          <div class="mb-3">
          <label for="customRange3" class="form-label">Punteggio</label>
        <input type="range" class="form-range" min="0" max="5" step="1" wire:model="score">
      </div>
          <div class="mb-3">
          <label  class="form-label">Recensione</label>
          <textarea type="text" class="form-control" wire:model="review"></textarea>
      </div>
      <button class="btn btn-primary" >Invia</button>
</form>
