<?php

namespace CotaPreco\Horus;

use CotaPreco\Horus\Message\MessageInterface;

/**
 * @author Andrey K. Vital <andreykvital@gmail.com>
 */
interface MessagePackingStrategyInterface
{
    /**
     * @param  MessageInterface $message
     * @return string
     */
    public function pack(MessageInterface $message);
}
