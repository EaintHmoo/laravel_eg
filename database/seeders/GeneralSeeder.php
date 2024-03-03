<?php

namespace Database\Seeders;

use App\Models\Made;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Branch;
use App\Models\CurrencyRate;
use App\Models\StyleNo;
use App\Models\Customer;
use App\Models\MachineProfile;
use App\Models\PurchaseSource;
use App\Models\Sparepart;
use App\Models\ThreadType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $branches = [
            [
                'id' => 1,
                'name'  => 'Hlaing',
                'user_id' => 3
            ],
            [
                'id' => 2,
                'name'  => 'Insein',
                'user_id' => 4
            ]
        ];

        Branch::insert($branches);


        $customers = [
            [
                'id' => 1,
                'attention_person' => 'test person',
                'factory_name' => 'Beauty Wave',
                'address' => 'test address',
                'phone' => '09123445566',
                'email' => 'bw@gmail.com',
            ],
            [
                'id' => 2,
                'attention_person' => 'kyaw kyaw',
                'factory_name' => 'Max Plus',
                'address' => 'Yangon',
                'phone' => '097658653445',
                'email' => 'mp@gmail.com',
            ],
            [
                'id' => 3,
                'attention_person' => 'su su',
                'factory_name' => 'bella',
                'address' => 'hlaing',
                'phone' => '09354362335',
                'email' => 'bella@gmail.com',
            ],
        ];

        Customer::insert($customers);
    }
}
