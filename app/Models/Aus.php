<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aus extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'image_url',
        'required_certificate',
        'training_duration',
        'working_hours',
        'salary_first_year',
        'salary_second_year',
        'salary_third_year',
        'salary_fourth_year',
        'body',
        'links',
        'popular',
        'best_paid'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
