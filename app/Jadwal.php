<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $id_mubaligh
 * @property int $id_masjid
 * @property string $waktu
 * @property string $tema
 * @property string $created_at
 * @property string $updated_at
 */
class Jadwal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jadwal';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_mubaligh', 'id_masjid', 'waktu', 'tema', 'created_at', 'updated_at'];

    public function masjid()
    {    
        return $this->belongsTo(\App\Masjid::class, 'id_masjid');
    }

    public function mubaligh(){
        return $this->belongsTo(\App\Mubaligh::class, 'id_mubaligh');
    }

}
