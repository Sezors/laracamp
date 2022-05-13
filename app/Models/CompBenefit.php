<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompBenefit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'came_id', 'expired', 'cvc', 'is_paid'];
}
