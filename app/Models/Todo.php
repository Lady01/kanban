<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'qtt_hours',
        'remaining_time',
        'deadline',
        'category_id',
        'tag_id',
        'team_id',
        'project_id',
        'phase_id',
        'order',
    ];


    public function updateOrder()
    {
        return $this->belongsTo(Phase::class);
    }

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
