<?php

namespace macropage\SDKs\speed4trade;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Message\Authentication\BasicAuth;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Speed4TradeClientFactory
{
    public static function factory(
        string $wsdl,
        array  $proxies = [],
        bool   $verify = false,
        string $username = '',
        string $password = ''
    ): Speed4TradeClient
    {
        $transport = Psr18Transport::createForClient(
            new PluginClient(
                new Client([
                               RequestOptions::PROXY  => $proxies,
                               RequestOptions::VERIFY => $verify,
                           ]),
                [
                    new AuthenticationPlugin(new BasicAuth($username, $password)),
                ]
            )
        );

        $ExtSoapOptions = ExtSoapOptions::defaults($wsdl);
        $typemap        = $ExtSoapOptions->getTypeMap();

        $engine = DefaultEngineFactory::create(
              $ExtSoapOptions
                  ->withClassMap(Speed4TradeClassmap::getCollection())
                  ->withTypeMap($typemap)
            , $transport);


        $eventDispatcher = new EventDispatcher();
        $engineCaller    = new EngineCaller($engine);
        $caller          = new EventDispatchingCaller($engineCaller, $eventDispatcher);

        return new Speed4TradeClient($caller);
    }
}

