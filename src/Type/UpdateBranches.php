<?php

namespace macropage\SDKs\speed4trade\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateBranches implements RequestInterface
{
    /**
     * @var string
     */
    private $argRequestData;

    /**
     * Constructor
     *
     * @var string $argRequestData
     */
    public function __construct($argRequestData)
    {
        $this->argRequestData = $argRequestData;
    }

    /**
     * @return string
     */
    public function getArgRequestData()
    {
        return $this->argRequestData;
    }

    /**
     * @param string $argRequestData
     * @return UpdateBranches
     */
    public function withArgRequestData($argRequestData)
    {
        $new = clone $this;
        $new->argRequestData = $argRequestData;

        return $new;
    }
}

