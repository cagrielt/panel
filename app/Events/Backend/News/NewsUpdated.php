<?php

namespace App\Events\Backend\News;

use Illuminate\Queue\SerializesModels;

/**
 * Class FaqUpdated.
 */
class NewsUpdated
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
