<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    protected $fillable = [
        'name',
        'link',
        'year',
        'upload_date',
        'user_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function denounces()
    {
        return $this->hasMany('App\Denounce');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorites');
    }
}
