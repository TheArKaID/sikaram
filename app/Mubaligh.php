<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama
 * @property string $nohp
 * @property string $alamat
 * @property string $created_at
 * @property string $updated_at
 */
class Mubaligh extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mubaligh';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'nohp', 'alamat', 'created_at', 'updated_at'];

}
