<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    /**
     * Add nullable creation and update timestamps to the table.
     *
     * @var string
     */
    public $timestamps = true;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pengguna';

    /**
     * Override the default primary column.
     *
     * @var string
     */
    protected $primaryKey = 'pengguna_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->pengguna_password;
    }

    /**
     * Get the pendaftaran record associated with the pengguna.
     */
    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran', 'pendaftaran_pengguna', 'pengguna_id');
    }
}
