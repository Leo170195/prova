<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;
use Illuminate\Http\Request;

class FormTavernaComponent extends Component

{   
    public $form;
    public $nome;
    public $posti;
    public $slot;
    public $giorno;
    public $orario;

    public $successMessage;

    protected $rules = [
        'nome' => 'required',
        'posti' => 'required',
        'slot' => 'required',
        'giorno' => 'required',
    ];

    public function submitForm(Request $request)
    {
    
        $form = Form::create([
            'nome' => $this->nome,
            'posti' => $this->posti,
            'slot' => $this->slot,
            'giorno' => $this->giorno,
        ]);

        $this->resetForm();

        $this->successMessage = 'Prenotazione completata con successo';
    }

    private function resetForm()
    {
        $this->nome = NULL;
        $this->posti = NULL;
        $this->slot = NULL;
        $this->giorno = NULL;
    }

    public function render()
    {
        return view('livewire.form-taverna-component');
    }
}
