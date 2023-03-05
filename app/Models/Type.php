<?php

namespace App\Models;

use App\Http\Controllers\ItemController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function item(){
        return $this->hasMany(ItemController::class);
    }
}
