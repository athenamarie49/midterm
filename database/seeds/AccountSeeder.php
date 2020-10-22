<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'athenam',
                'init_invest' => 13144,
                'start_date' => '2020-12-08',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'fatima',
                'init_invest' => 24121,
                'start_date' => '2019-08-12',
                'remarks' => 'dont through fixer'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'joelG',
                'init_invest' => 12424,
                'start_date' => '2020-01-03',
                'remarks' => 'dont through fixer'

            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}

