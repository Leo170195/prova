<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Acommerce extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // {user} indica una cosa obbligatoria che deve inserire l'utente
    // {user?} la rende facoltativa 
    // {user = ciao} inserisci un deafult
    // {user*} ti obbliga a inserire più parametri 
    // {user?*} rende facoltativi più parametri
    // {-- force} se inserito dall'utente diveta true altrimenti è false
    // {--F|forse} serve per gli shortcut

    // {user : descrizione del parametro da inserire}
    // {--force= : descrizione del parametro da inserire}
    protected $signature = 'acommerce:install {user?} {--force=false}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all install';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // recupera il valore selezionato
        $userId = $this->argument('user');
        // recupera tutti i valori
        $arguments = $this->arguments();
        // recupera l'opzione selezionata 
        $forceName = $this->option('force');
        // recupera le varie opzioni
        // $options = $this->options();


        // Il metodo ask richiederà all'utente la domanda posta 
        $name = $this->ask('What is your name?');
        //Il secretmetodo è simile a ask, ma l'input dell'utente non sarà visibile durante la digitazione nella console
        $password = $this->secret('What is the password?');

        // Se è necessario chiedere all'utente una semplice conferma "sì o no", è possibile utilizzare il confirm
        if ($this->confirm('Do you wish to continue?')) {
            //
        }
        //Se necessario, è possibile specificare che il prompt di conferma debba tornare true
        if ($this->confirm('Do you wish to continue?', true)) {
            //
        }

        // Stampa il commento 
        $this->comment('Php artisan migrate:rollback');

        // Richiama i comandi facendoli vedere 
        $this->call('migrate:rollback');
        // Richiama i comandi non facendoli vedere 
        $this->callSilent('migrate');
    }
}
