<?php

namespace React\Http\Parser;

use Evenement\EventEmitterTrait;
use React\Http\Request;

class NoBody implements ParserInterface
{
    use EventEmitterTrait;
    use DoneTrait;

    public function __construct(Request $request)
    {
        $this->markDone();
    }
}
