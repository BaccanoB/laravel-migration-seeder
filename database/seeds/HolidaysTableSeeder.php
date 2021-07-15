<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayHoliday=config('holiday');

        foreach ($arrayHoliday as $item) {
            $holiday = new Holiday();

            $holiday->name=$item['name'];
            $holiday->holiday_agency=$item['holiday_agency'];
            $holiday->country=$item['country'];
            $holiday->city=$item['city'];
            $holiday->hotel=$item['hotel'];
            $holiday->description=$item['description'];
            $holiday->departure=$item['departure'];
            $holiday->return=$item['return'];
            $holiday->all_inclusive=$item['all_inclusive'];
            $holiday->price=$item['price'];

            $holiday->save();
        }

        
    }
}
