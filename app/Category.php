<?php namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

/**
 * Class Status
 *
 * @property \App\Admin                $author
 */
class Category extends Eloquent{

    /**
     * @var array
     */
    protected $guarded = ['id', 'author_id'];
    /**
     * @var array
     */
    protected $subCategoriesArray = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeWithAuthor($query)
    {
        return $query->with('author');
    }

    /**
     * @return Categories
     */
    public function subCategories()
    {
        return $this->hasMany(get_class($this), 'parentId', 'id')->where('statusId','=',1);
    }

    /**
     * @return array
     */
    public function subCategoriesArray()
    {
        if ( !$this->subCategoriesArray ) {
            foreach( $this->subCategories as $category ) {
                array_push($this->subCategoriesArray, $category->id);
            }
        }
        return $this->subCategoriesArray;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return HasOne
     */
    public function parent() : HasOne
    {
        return $this->hasOne(get_class($this), 'id', 'parentId');
    }
}
