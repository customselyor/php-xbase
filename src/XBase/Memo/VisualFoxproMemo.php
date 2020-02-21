<?php

namespace XBase\Memo;

class VisualFoxproMemo extends FoxproMemo
{
    /**
     * @inheritDoc
     */
    public function get($pointer)
    {
        $decPointer = unpack('s', $pointer)[1];
        return parent::get($decPointer);
    }
}
