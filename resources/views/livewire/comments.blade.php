<div>
    @if($successMessage)
    <div class="alert alert-success">
        {{ $successMessage }}
        <button type="button" wire:click="$set('successMessage', null)" >
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form id="contact-form" role="form"  wire:submit.prevent="submitForm" autocomplete="on">
            @csrf
            <textarea wire:model.lazy="comment" id="comment" name="comment"></textarea>
            <button type="submit" class="btn btn-lg btn-danger btn-block btn-rounded mb-4 py-2 text-uppercase">Aggiungi commento</button>
    </form>
    <div class="col-12">
        @foreach ($comments as $comment)
        @if ($comment)
        <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$comment->comment}}</h4>
                <p class="card-text">{{$comment->created_at->format('d/m/y')}}</p>
            </div>
        </div>
        @else
        <div>Non ci sono commenti</div>
        @endif
        @endforeach
    </div>
</div> 
 