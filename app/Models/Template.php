<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function setImageAttribute ($image){
        $newImageName = uniqid() . '_' . 'image' . '.' . $image->extension();
        $image->move(public_path('template_images') , $newImageName);
        return $this->attributes['image'] =  '/'.'template_images'.'/' . $newImageName;
    }

    public function userInformation() {
        return $this->hasMany(UserInformation::class);
    }

}
