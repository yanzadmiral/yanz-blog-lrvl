<?php

namespace Yblog;

use Illuminate\Database\Eloquent\Model;

class Artikeltags extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'artikeltags';
    protected $fillable = ['id_tag','id_artikel'];
}
