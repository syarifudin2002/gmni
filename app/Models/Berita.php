<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Berita extends Model
{
   public function scopeFilter($query, array $filters)
   {

      $query->when($filters['search'] ?? false, function ($query, $search) {
         return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
      });

      $query->when($filters['category'] ?? false, function ($query, $category) {
         return $query->whereHas('Kategori', function ($query) use ($category) {
            $query->where('slug', $category);
         });
      });
   }


   public function Kategori() // kategori mengikuti view variabel
   {
      return $this->belongsTo(Kategori::class);
   }
   use HasFactory, Sluggable;

   protected $guarded = ['id'];

   public function getRouteKeyName(): string
   {
      return 'slug';
   }

   public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
