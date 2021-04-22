<x-layout>
<div class="container">
    <div class="row">
        <div class="col-2 text-center">{{ $article->id }}</div>
        <div class="col-2 text-center">{{ $article->name }}</div>
        <div class="col-2 text-center">{{ $article->surname }}</div>
        <div class="col-2 text-center">{{ $article->description }}</div>
        <div class="col-4"><img src="{{Storage::url($article->img)}}" alt=""></div>
        {{-- <div class="col-2"><a href="{{route('modify', ['article' => $article->id])}}" class="btn btn-success">Modifica</a></div> --}}
        <div class="col-12 mt-5" x-data="{ open: false }">
            <button class="btn btn-primary" @click="open = true">Modifica Articolo</button>
        
            <ul
                x-show="open"
                @click.away="open = false"
            >
            <div class="container">
                <div class="row">
                    <livewire:modify :article="$article" />
                </div>
            </div>
            </ul>
        </div> 
    </div>
</div>

</x-layout>