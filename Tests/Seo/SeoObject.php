<?php

namespace Sonata\SeoBundle\Tests\Seo;

use Sonata\SeoBundle\Seo\SeoMetaInterface;
use Sonata\SeoBundle\Seo\SeoOgInterface;
use Sonata\SeoBundle\Traits\SeoMetaEntity;
use Sonata\SeoBundle\Traits\SeoOgEntity;

class SeoObject implements SeoMetaInterface, SeoOgInterface
{
    use SeoOgEntity, SeoMetaEntity;
}
