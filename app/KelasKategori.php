<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasKategori extends Model
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
    protected $table = 'kelas_kategori';

    /**
     * Override the default primary column.
     *
     * @var string
     */
    protected $primaryKey = 'kkategori_id';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the kelas record associated with the kelas kategori.
     */
    public function kelas()
    {
        return $this->hasMany('App\Kelas', 'kelas_kategori', 'kkategori_id');
    }
}
