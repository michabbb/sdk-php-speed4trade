<?php

namespace macropage\SDKs\speed4trade\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FetchFeedback implements RequestInterface
{
    /**
     * @var string
     */
    private $requestData;

    /**
     * Constructor
     *
     * @var string $requestData
     */
    public function __construct($requestData)
    {
        $this->requestData = $requestData;
    }

    /**
     * @return string
     */
    public function getRequestData()
    {
        return $this->requestData;
    }

    /**
     * @param string $requestData
     * @return FetchFeedback
     */
    public function withRequestData($requestData)
    {
        $new = clone $this;
        $new->requestData = $requestData;

        return $new;
    }
}
