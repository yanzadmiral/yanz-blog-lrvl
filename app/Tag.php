<?php

namespace Yblog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    
    protected $primaryKey = 'id_tag';
    public $incrementing = false;
    protected $fillable = ['id_tag','nama_tag'];

    
}
