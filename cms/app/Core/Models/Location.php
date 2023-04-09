<?php
namespace App\Core\Models;
use Illuminate\Database\Eloquent\Model;
class Location extends Model
{
    protected $fillable = [
        'name',
        'top_search',
        'hot_location',
        'popular_location',
        'content',
        'country',
        'city',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'user_id'
    ];
}
