<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine(
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults('speed4trade.wsdl', [])
                          ->disableWsdlCache()
        ))
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('macropage\SDKs\speed4trade\Type')
    ->setClientDestination('src')
    ->setClientName('Speed4TradeClient')
    ->setClientNamespace('macropage\SDKs\speed4trade')
    ->setClassMapDestination('src')
    ->setClassMapName('Speed4TradeClassmap')
    ->setClassMapNamespace('macropage\SDKs\speed4trade')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
;
