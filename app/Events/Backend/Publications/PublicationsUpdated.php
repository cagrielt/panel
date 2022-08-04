<?php

namespace App\Events\Backend\Publications;

use Illuminate\Queue\SerializesModels;

/**
 * Class FaqUpdated.
 */
class PublicationsUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $publications;

    /**
     * @param $page
     */
    public function __construct($publications)
    {
        $this->publications = $publications;
    }
}
