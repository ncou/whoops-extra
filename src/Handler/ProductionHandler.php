<?php

declare(strict_types=1);

namespace SKM\Whoops\Handler;

use Whoops\Handler\Handler;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class ProductionHandler extends Handler
{
    /**
     * @var bool
     */
    private $debug = false;

    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }

    public function handle(): int
    {
        if ($this->debug) {
            return Handler::DONE;
        }

        return Handler::QUIT;
    }
}
