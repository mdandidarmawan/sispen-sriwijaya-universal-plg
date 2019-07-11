<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
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
    protected $table = 'pendaftaran';

    /**
     * Override the default primary column.
     *
     * @var string
     */
    protected $primaryKey = 'pendaftaran_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the kelas record associated with the pendaftaran.
     */
    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'pendaftaran_kelas', 'kelas_id');
    }

    /**
     * Get the pengguna record associated with the pendaftaran.
     */
    public function pengguna()
    {
        return $this->belongsTo('App\Pengguna', 'pendaftaran_pengguna', 'pengguna_id');
    }
}
