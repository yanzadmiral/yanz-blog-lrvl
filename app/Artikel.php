<?php

namespace Yblog;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['artikel_id','user_id','title','content'];
}
