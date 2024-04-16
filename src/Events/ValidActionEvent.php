<?php

namespace jdavidbakr\MailTracker\Events;

use Illuminate\Foundation\Events\Dispatchable;
use jdavidbakr\MailTracker\Model\SentEmail;

class ValidActionEvent
{
    use Dispatchable;

    public $skip = false;

    public $sent_email;

    public function __construct(SentEmail $sent_email)
    {
        $this->sent_email = $sent_email;
    }
}