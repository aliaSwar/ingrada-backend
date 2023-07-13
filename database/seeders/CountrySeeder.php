<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Concerns\HasDefaultCountries;
use App\Models\Country;
use Illuminate\Database\Seeder;

final class CountrySeeder extends Seeder
{
    use HasDefaultCountries;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::query()->truncate();

        foreach ($this->countries() as $key => $value) {
            Country::query()->create($value);
        }
    }
}
