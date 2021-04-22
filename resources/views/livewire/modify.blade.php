<div class="my-5">
    
    <form  @submit.prevent="message()" id="contact-form" role="form" method="POST"  wire:submit.prevent="submitForm" autocomplete="on" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input wire:model.lazy="name" id="name" name="name" value="{{old('name', $name)}}">
        <input wire:model.lazy="surname" id="surname" surname="surname" value="{{old('surname', $surname)}}">
        <textarea wire:model.lazy="description" name="description" id="description" >{{old('description', $description)}}</textarea>
        @error('img') <span class="error">{{ $message }}</span> @enderror
        
        @if ($img)
        <img src="{{ $img->temporaryUrl() }}" alt="">
        @elseif ($article->img)
        <img src="{{Storage::url($article->img)}}" alt=""> 
        @endif
        <input wire:model.lazy="img" type="file" id="img" img="img">
           
        <button type="submit" class="btn btn-lg btn-danger btn-block btn-rounded mb-4 py-2 text-uppercase">Salva Modifiche</button>
        
        {{-- <ul x-show="message" @click.away="message = false">
            <div class="col-12">
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            </div>
        </ul> --}}
    
    </form>
    <script>
        function message() {
            return setTimeout(function(){ alert('{{ $successMessage }}'); }, 1000);
        }
    </script>
</div> 
