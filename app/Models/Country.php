 <?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}