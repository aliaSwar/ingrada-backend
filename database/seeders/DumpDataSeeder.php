<?php

namespace Database\Seeders;

use App\Concerns\HasDefaultDumpData;
use App\Models\Color;
use App\Models\Font;
use App\Models\Scope;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DumpDataSeeder extends Seeder
{
    use HasDefaultDumpData;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Type::query()->create($this->types());
            $color=Color::query()->create($this->colors());
            $font=Font::query()->create($this->fonts());
            $scope=Scope::query()->create($this->scopes());
            
            $scope->colors()->sync([$color->id]);
            $scope->fonts()->sync([$font->id]);

    }
}