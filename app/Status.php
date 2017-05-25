<?php namespace App;

use Eloquent;

/**
 * Class Status
 *
 * @property \App\Admin                $author
 */
class Status extends Eloquent{

	/**
	 * @var array
	 */
	protected $guarded = ['id', 'author_id'];

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
     * @return id
     */
    public function getId() : int
    {
        return $this->id;
	}

    /**
     * @return string
     */
	public function getName() : string
	{
		return $this->name;
	}

    /**
     * @return string
     */
	public function getAlias() : string
	{
		return $this->alias;
	}

    /**
     * @return string
     */
	public function getColor() : string
	{
		return $this->color;
	}
}
