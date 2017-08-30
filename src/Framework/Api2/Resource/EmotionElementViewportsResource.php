<?php declare(strict_types=1);

namespace Shopware\Framework\Api2\Resource;

use Shopware\Framework\Api2\ApiFlag\Required;
use Shopware\Framework\Api2\Field\FkField;
use Shopware\Framework\Api2\Field\IntField;
use Shopware\Framework\Api2\Field\ReferenceField;
use Shopware\Framework\Api2\Field\StringField;
use Shopware\Framework\Api2\Field\BoolField;
use Shopware\Framework\Api2\Field\DateField;
use Shopware\Framework\Api2\Field\SubresourceField;
use Shopware\Framework\Api2\Field\LongTextField;
use Shopware\Framework\Api2\Field\LongTextWithHtmlField;
use Shopware\Framework\Api2\Field\FloatField;
use Shopware\Framework\Api2\Field\TranslatedField;
use Shopware\Framework\Api2\Field\UuidField;
use Shopware\Framework\Api2\Resource\ApiResource;

class EmotionElementViewportsResource extends ApiResource
{
    public function __construct()
    {
        parent::__construct('s_emotion_element_viewports');
        
        $this->fields['elementID'] = (new IntField('elementID'))->setFlags(new Required());
        $this->fields['emotionID'] = (new IntField('emotionID'))->setFlags(new Required());
        $this->fields['alias'] = (new StringField('alias'))->setFlags(new Required());
        $this->fields['startRow'] = (new IntField('start_row'))->setFlags(new Required());
        $this->fields['startCol'] = (new IntField('start_col'))->setFlags(new Required());
        $this->fields['endRow'] = (new IntField('end_row'))->setFlags(new Required());
        $this->fields['endCol'] = (new IntField('end_col'))->setFlags(new Required());
        $this->fields['visible'] = new IntField('visible');
    }
    
    public function getWriteOrder(): array
    {
        return [
            \Shopware\Framework\Api2\Resource\EmotionElementViewportsResource::class
        ];
    }
}