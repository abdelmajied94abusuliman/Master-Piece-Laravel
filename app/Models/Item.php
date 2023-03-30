<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_furnished', 'location', 'user_id' , 'service_id' ,'price' , 'type_id', 'beds' ,'baths' , 'area' , 'status' , 'house_number' , 'frequency' , 'street_name' , 'location_url' , 'description' , 'general_details' , 'added_features'];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
