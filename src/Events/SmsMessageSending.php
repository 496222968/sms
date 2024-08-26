<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-ext/sms.
 *
 * @link     https://github.com/hyperf-ext/sms
 * @contact  eric@zhu.email
 * @license  https://github.com/hyperf-ext/sms/blob/master/LICENSE
 */
namespace Dwc\Sms\Events;

use Dwc\Sms\Contracts\SmsableInterface;

class SmsMessageSending
{
    /**
     * The message instance.
     *
     * @var \Dwc\Sms\Contracts\SmsableInterface
     */
    public $smsable;

    /**
     * Create a new event instance.
     */
    public function __construct(SmsableInterface $smsable)
    {
        $this->smsable = $smsable;
    }
}
