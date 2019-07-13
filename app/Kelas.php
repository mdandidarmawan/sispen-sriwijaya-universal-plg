<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
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
    protected $table = 'kelas';

    /**
     * Override the default primary column.
     *
     * @var string
     */
    protected $primaryKey = 'kelas_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the kategori record associated with the kelas.
     */
    public function kategori()
    {
        return $this->belongsTo('App\KelasKategori', 'kelas_kategori', 'kkategori_id');
    }

    /**
     * Get the pendaftaran record associated with the kelas.
     */
    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran', 'pendaftaran_kelas', 'kelas_id');
    }

    /**
     * Get the pendaftaran record associated with the kelas.
     */
    public function approved()
    {
        return $this->hasMany('App\Pendaftaran', 'pendaftaran_kelas', 'kelas_id')->where('pendaftaran_status', 1);
    }
}
