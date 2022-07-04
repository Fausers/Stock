<?php

namespace App\Models;

use App\Models\Assets\StockIn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'quantity',
        'asset_type_id',
        'buying_price',
        'selling_price',
        'is_bulk'
    ];

    /**
     * Get the profile associated with the user.
     */
    public function asset_type()
    {
        return $this->belongsTo(\App\Models\AssetType::class);
    }

    public function check_ins()
    {
        return $this->belongsToMany(StockIn::class,"asset_stock_ins",'asset_id','stock_ins_id');
    }
}
