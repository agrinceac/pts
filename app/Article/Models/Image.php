<?php
namespace App\Article\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Article\Models
 */
class Image extends Model
{
    protected $table = 'articles_images';
    protected $appends = ['basePath'];

    const ACTIVE_STATUS_ID = 1;
    const BLOCKED_STATUS_ID = 2;

    const IMAGES_LOCATION = 'images/articles';

    /**
     * @return string
     */
    public function getBasePathAttribute()
    {
        return url(self::IMAGES_LOCATION);
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }
}