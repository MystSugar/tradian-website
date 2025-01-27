<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('procedures')->insert([
            [
                'heading' => 'Customs Bond for Courier Goods',
                'type' => 'import',
                'details' => 'Information about Customs Bond and Import procedure for Courier Goods',
            ],
            [
                'heading' => 'Prohibited & Restricted Items',
                'type' => 'import',
                'details' => 'Information about Prohibited & Restricted Items for Import',
            ],
            [
                'heading' => 'Duty Exemptions',
                'type' => 'import',
                'details' => 'Duty Exemptions & Allowances for Businesses wishing to Import goods to Maldives',
            ],

            [
                'heading' => 'Duty Exemptions & Allowances',
                'type' => 'export',
                'details' => 'Duty Exemptions & Allowances for Businesses wishing to Export goods from Maldives',
            ],
            [
                'heading' => 'Transit Procedure',
                'type' => 'export',
                'details' => 'Information about the Transit Procedure in Maldives',
            ],
            [
                'heading' => 'Restricted Items',
                'type' => 'export',
                'details' => 'Items Restricted for Export from Maldives',
            ],
        ]);

    }
}


