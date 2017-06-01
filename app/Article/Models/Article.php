<?php namespace App\Article\Models;

use App\Admin;
use App\Interfaces\Metable;
use App\Noop;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Gallery
 *
 */
class Article extends Model
{
    protected $appends = ['breadcrumbs'];

	/**
	 * @const string
	 */
	const PUBLISHED_AT = 'published_at';

    const CATEGORY_INDEX = 7;
    const CATEGORY_BENEFIT = 8;
    const STATUS_ACTIVE  = 1;
    const FAQ_CATEGORY_ID = 10;

	/**
	 * @var array
	 */
	protected $guarded = ['id', 'author_id'];

	/**
	 * @var array
	 */
	protected $dates = ['deleted_at', self::PUBLISHED_AT];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function author()
	{
		return $this->belongsTo(Admin::class, 'author_id', 'id');
	}

    /**
     * @return mixed
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'statusId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categoryId');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(Image::class, 'articleId', 'id');
    }

    /**
     * @return Collection
     */
    public function getImages()
    {
        return $this->images;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getH1()
    {
        return $this->h1;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @return mixed
     */
    public function nextArticle()
    {
        return Article::where('id', '>', $this->id)
            ->orderBy('id', 'ASC')
            ->first();
    }

    /**
     * @return mixed
     */
    public function prevArticle()
    {
        return Article::where('id', '<', $this->id)
            ->orderBy('id', 'ASC')
            ->first();
    }

    public function getBreadcrumbsAttribute()
    {
        $breadcrumbs = [];

        foreach (array_reverse($this->category->getParentsArray()) as $key=>$parent)
            $breadcrumbs[] = [
                'step'=>$key + 1,
                'id'=>$parent->id,
                'alias'=>$parent->alias,
                'name'=>$parent->name
            ];

        $breadcrumbs[] = [
            'step'=>count($this->category->getParentsArray()) + 1,
            'id'=>$this->category->id,
            'alias'=>$this->category->alias,
            'name'=>$this->category->name
        ];

        return $breadcrumbs;
    }
}
