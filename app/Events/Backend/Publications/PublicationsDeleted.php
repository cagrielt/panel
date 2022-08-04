<?php

namespace App\Events\Backend\Publications;

use Illuminate\Queue\SerializesModels;

/**
 * Class FaqDeleted.
 */
class PublicationsDeleted
{
    use SerializesModels;

    /**
     * @var
     */
    public $publications;

    /**
     * @param $faq
     */
    public function __construct($publications)
    {
        $this->publications = $publications;
    }
}
