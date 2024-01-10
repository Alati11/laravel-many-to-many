<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tournaments = ['Reggio Calabria Challenger','Padova Challenge Open','Genova Challenge',
        'Internazionali Italia','ATP Challenger Cortina','ATP Venezia'];

        foreach($tournaments as $tournament_name) {

            $tournament = new Tournament();

            $tournament->name = $tournament_name;
            $tournament->slug = Str::slug($tournament_name);
            $tournament->save();

        }
    }
}
