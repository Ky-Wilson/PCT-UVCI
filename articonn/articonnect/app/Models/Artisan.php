<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Artisan extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom', 'tel', 'password', 'metier_id', 'ville', 'commune'
    ];

    /**
     * Get the route key name for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'tel';
    }

    /**
     * Override default username field
     *
     * @return string
     */
    public function username()
    {
        return 'tel';
    }


    public function metier()
    {
        return $this->belongsTo(Metier::class);
    }
}
