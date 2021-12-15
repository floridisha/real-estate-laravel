<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['keyword'] ?? false, fn($query, $keyword) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('description', 'like', '%' . $keyword . '%')
            )
        );

        $query->when($filters['type'] ?? false, fn($query, $type) =>
            $query->where(fn($query) =>
                $query->where('type', 'like', '%' . $type . '%')
            )
        );

        $query->when($filters['location'] ?? false, fn($query, $location) =>
            $query->where(fn($query) =>
                $query->where('location', 'like', '%' . $location . '%')
            )
        );

        $query->when($filters['bedrooms'] ?? false, fn($query, $bedrooms) =>
            $query->where(fn($query) =>
                $query->where('bedrooms', 'like', '%' . $bedrooms . '%')
            )
        );

        $query->when($filters['garage'] ?? false, fn($query, $garage) =>
            $query->where(fn($query) =>
                $query->where('garage', 'like', '%' . $garage . '%')
            )
        );

        $query->when($filters['bathrooms'] ?? false, fn($query, $bathrooms) =>
            $query->where(fn($query) =>
                $query->where('bathrooms', 'like', '%' . $bathrooms . '%')
            )
        );

        $query->when($filters['price'] ?? false, fn($query) =>
            $query->where(fn($query) =>
                $query->where('price', '<=', request('price'))
            )
        );
    }

}
