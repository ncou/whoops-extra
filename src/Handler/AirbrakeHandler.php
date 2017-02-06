<?php

declare(strict_types=1);

namespace SKM\Whoops\Handler;

use Airbrake\Notifier;
use Whoops\Handler\Handler;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class AirbrakeHandler extends Handler
{
    /**
     * @var Notifier
     */
    private $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function handle(): int
    {
        $this->notifier->notify($this->getException());

        return Handler::DONE;
    }
}
