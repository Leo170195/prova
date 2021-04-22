<div>
    <!-- Alert Profilo completato -->
    @if($successMessage)
    <div class="alert alert-success">
        {{ $successMessage }}
        <button type="button" wire:click="$set('successMessage', null)" >
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- Form -->
    <form id="contact-form" role="form"  wire:submit="submitForm" autocomplete="on" >
    @csrf
        <fieldset>
            
            <div class="form-group mb-4">
                <div>
                    <input tabindex="1" type="text" class="@error('nome') border-danger @enderror form-control" wire:model.lazy="nome" id="nome" name="nome" placeholder="*Nome e Cognome" required>
                </div>
                @error('nome') <p class="text-danger p-1 mb-0">Questo campo è obbligatorio.</p> @enderror
            </div>
            
            <div class="form-group mb-4">
                <div>
                    <input tabindex="2" type="number" class="@error('posti') border-danger @enderror form-control" wire:model.lazy="posti" id="posti" name="posti" placeholder="*Numero di persone" required>
                </div>
                @error('posti') <p class="text-danger p-1 mb-0">Questo campo è obbligatorio.</p> @enderror
            </div>
            
            <div class="form-group mb-4">
                <div>
                    <input tabindex="3" type="date" class="@error('giorno') border-danger @enderror form-control" wire:model.lazy="giorno" id="giorno" name="giorno" placeholder="*Giorno" required>
                </div>
                @error('giorno') <p class="text-danger p-1 mb-0">Questo campo è obbligatorio.</p> @enderror
            </div>
         
            <div class="form-group mb-4">
                <div>
                    <select tabindex="2" class="@error('slot') border-danger @enderror form-control" wire:model.lazy="slot" id="slot" name="slot" placeholder="*{{ __('orario') }}" required>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                        <option value="21:00">21:00</option>
                        <option value="22:00">22:00</option>
                      </select>
                </div>
                @error('departure') <p class="text-danger p-1 mb-0">Questo campo è obbligatorio.</p> @enderror
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button tabindex="5" type="submit" class="btn btn-lg btn-dark btn-block btn-rounded mb-4 py-2 text-uppercase">invia prenotazione</button>
                </div>
            </div>
    
        </fieldset>
    </form>
</div>
