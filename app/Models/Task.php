<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

final class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'status', 'category',
        'start_date', 'end_date', 'real_end_date',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function order(): BelongsTo
    {
        return $this->belongsTo(order::class);
    }
    public function filestask(): HasMany
    {
        return $this->hasMany(FileTask::class);
    }

    public function scopeByDay($query)
    {
        return $query
            ->select(DB::raw('DATE(start_date) as date'), DB::raw('SUM(tasks_hour) as hours'), DB::raw('COUNT(*) as task_count'), DB::raw('GROUP_CONCAT(id) as task_ids'))
            ->groupBy('date')
            ->orderBy('date');
    }

  public function scopeByWeek($query) {
    return $query
        ->select(DB::raw('YEAR(start_date) as year'), DB::raw('WEEK(start_date) as week'), DB::raw('SUM(tasks_hour) as hours'))
        ->groupBy('year', 'week')
        ->orderBy('year', 'desc')
        ->orderBy('week', 'desc');
}


public function scopeByMonth($query)
    {
        return $query
            ->select(DB::raw('DATE_FORMAT(start_date, "%Y-%m") as month'), DB::raw('SUM(tasks_hour) as hours'), DB::raw('COUNT(*) as task_count'), DB::raw('GROUP_CONCAT(id) as task_ids'))
            ->groupBy('month')
            ->orderBy('month', 'desc');
    }
public function giver(){
  return $this->belongsTo(User::class,'giver_id','id');
}
}
