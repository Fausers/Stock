<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'unit',
        'bulk_unit',
        'in_bulk_quantity',
        'store_id'
    ];


    /**
     * Get the profile associated with the user.
     */
    public function asset()
    {
        return $this->hasMany(\App\Models\Asset::class);
    }
}
