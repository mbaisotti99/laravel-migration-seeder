<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Train;

class ClearTrains extends Command
{
    // Nome del comando Artisan
    protected $signature = 'trains:clear';

    protected $description = 'Cancella tutte le entry dalla tabella trains';

    public function handle()
    {
        if ($this->confirm('Sei sicuro di voler cancellare tutti i treni? Questa azione è irreversibile.')) {
            Train::truncate();
            $this->info('Tutti i treni sono stati cancellati e l\'ID è stato azzerato.');
        } else {
            $this->warn('Operazione annullata.');
        }
    }
}