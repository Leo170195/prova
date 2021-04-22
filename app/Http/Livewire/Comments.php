<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Http\Request;


class Comments extends Component
{
    public $comment;
    public $successMessage;

    protected $rules = [
        'comment' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm(Request $request)
    {
        
        $comment = $this->validate();

        $comment = Comment::create([
            'comment' => $this->comment,
        ]);
      
        $this->resetForm();

        $this->successMessage = 'Commento aggiunto con successo';
    }

    private function resetForm()
    {
        $this->comment = NULL;
    }

    public function render()
    {
        $comments = Comment::all();
        return view('livewire.comments', compact('comments'));
    }
}








