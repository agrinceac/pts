<?php namespace App\Article\Models;

use Eloquent;
use App\Admin;

/**
 * Class Status
 *
 * @property \App\Admin                $author
 */
class CategoryStatus extends \App\Status{

    /**
     * @var string
     */
    protected $table = 'articles_categories_statuses';
}
