<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Shop extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $table = 'shops';

    protected $fillable = [
        'name',
        'details',
        'publication_status',
        'view_order',
        'is_active',
    ];

    protected $casts = [
        'publication_status' => 'integer',
        'view_order' => 'integer',
    ];
}
