<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'phone',
        'contact_person',
        'password',
    ];


    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}