<?php

namespace Sonata\SeoBundle\Seo;

/**
 * Interface to define that object knows about meta information
 */
interface SeoMetaInterface
{
    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @return string
     */
    public function getMetaTitle();
}
