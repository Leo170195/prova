<div>
    <div class="display-4" wire:poll.1s>
        Ancora non hai l'orologio : <br> {{ now() }}
    </div>
    <div>{{$count}}</div>
    <button class="btn btn-success" wire:click='decrement'>-</button>
    <button class="btn btn-success" wire:click='increment'>+</button>
</div>
