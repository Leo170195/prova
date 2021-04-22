<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Modify extends Component
{
    use WithFileUploads;

    public $article;
    public $name;
    public $surname;
    public $description;
    public $img;
    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'surname' => 'required',
        'description' => 'required',
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->name = $article->name;
        $this->surname = $article->surname;
        $this->description = $article->description;
        $this->successMessage = 'Articolo modificato con successo';

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $imageToShow = $this->article->img ?? null;
        $this->validate();

        $this->article->update([
            'name' => $this->name,
            'surname' => $this->surname,
            'description' => $this->description,
            'img' => $this->img ? $this->img->store('img', 'public') : $imageToShow,
        ]);
      
        $this->successMessage = 'Articolo modificato con successo';
        // session()->flash('successMessage' , 'Articolo modificato con successo');

    }

    public function render()
    {
        return view('livewire.modify');
    }
}
