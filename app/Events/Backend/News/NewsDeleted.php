<?php

namespace App\Events\Backend\News;

use Illuminate\Queue\SerializesModels;

/**
 * Class FaqDeleted.
 */
class NewsDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $news;

    /**
     * @param $faq
     */
    public function __construct($news)
    {
        $this->news = $news;
    }
}
