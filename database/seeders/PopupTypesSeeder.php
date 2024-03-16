<?php

namespace Database\Seeders;

use App\Models\PopupType;
use App\Enums\PopupTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PopupTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PopupType::create(['name' => PopupTypeEnum::FullScreenPopup]);
        PopupType::create(['name' => PopupTypeEnum::SlideInPopup]);
        PopupType::create(['name' => PopupTypeEnum::ExitIntentPopup]);
    }
}
