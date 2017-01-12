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
    protected $primaryKey = 'id_artikel';
    public $incrementing = false;
    protected $fillable = ['id_artikel','id_user','title','content'];
    protected $hidden = ['created_at','updated_at'];
    //public $pimaryKey = 'idasd';
    /**
     * Artikel belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsTo('Yblog\User','id_user');
    }

    /**
     * Artikel belongs to Usertag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag()
    {
        // belongsTo(RelatedModel, foreignKey = usertag_id, keyOnRelatedModel = id)
        return $this->belongsToMany('Yblog\Tag','artikeltags','id_artikel','id_tag');
    }
}
