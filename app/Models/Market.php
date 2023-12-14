<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $guarded = ['id'];
    protected $with = ['author','category'];
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) && $filters['search']) {
            return $query->where('title', 'like', '%' . $filters['search'] . '%')
                ->orWhere('desription', 'like', '%' . $filters['search'] . '%')
                ->orWhereHas('category', function ($q) use ($filters) {
                    $q->where('name', 'like', '%' . $filters['search'] . '%');
                })
                ->orWhereHas('author', function ($q) use ($filters) {
                    $q->where('username', 'like', '%' . $filters['search'] . '%');
                });
        } else {
            return $query; // Return the unmodified query when no search filter is applied.
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
