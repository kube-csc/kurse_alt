<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportEquipmentBookedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sport_equipment_bookeds')->delete();

        DB::table('sport_equipment_bookeds')
            ->insert(
                [
                  array('id' => '1', 'trainer_id' => '3', 'mitglied_id' => '0', 'teilnehmer_id' => '0', 'sportgeraet_id' => '3', 'kurs_id' => '1', 'created_at' => '2019-05-18'),
                ]);
    }
}
