<?php

namespace macropage\SDKs\speed4trade\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateCouponsResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $return;

    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param string $return
     * @return UpdateCouponsResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

