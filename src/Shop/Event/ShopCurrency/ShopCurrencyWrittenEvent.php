<?php declare(strict_types=1);

namespace Shopware\Shop\Event\ShopCurrency;

use Shopware\Api\Write\WrittenEvent;
use Shopware\Shop\Definition\ShopCurrencyDefinition;

class ShopCurrencyWrittenEvent extends WrittenEvent
{
    const NAME = 'shop_currency.written';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDefinition(): string
    {
        return ShopCurrencyDefinition::class;
    }
}