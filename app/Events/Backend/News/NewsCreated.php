<?php

namespace App\Events\Backend\News;

use Illuminate\Queue\SerializesModels;

/**
 * Class NewsCreated.
 */
class NewsCreated
{
    use SerializesModels;

    /**
     * @var
     */
    public $news;

    /**
     * @param $page
     */
    public function __construct($news)
    {
        $this->news = $news;
    }
}
