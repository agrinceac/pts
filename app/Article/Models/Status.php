<?php namespace App\Article\Models;

use Eloquent;
use App\Admin;

/**
 * Class Status
 *
 * @property \App\Admin                $author
 */
class Status extends \App\Status{

    /**
     * @var string
     */
    protected $table = 'articles_statuses';
}
