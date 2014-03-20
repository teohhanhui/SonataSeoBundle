<?php

namespace Sonata\SeoBundle\Seo;

/**
 * Interface to define that object returns og properties
 */
interface SeoOgInterface
{
    /**
     * Returns an array of og properties
     *
     * @return array
     */
    public function getOgProperties();
}
