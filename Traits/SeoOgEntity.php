<?php

namespace Sonata\SeoBundle\Traits;

/**
 * Seo Trait, usable with PHP >= 5.4
 */
trait SeoOgEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="og_title", type="string", nullable=true)
     */
    protected $ogTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="og_description", type="text", nullable=true)
     */
    protected $ogDescription;

    /**
     * @param string $ogDescription
     *
     * @return $this
     */
    public function setOgDescription($ogDescription)
    {
        $this->ogDescription = $ogDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getOgDescription()
    {
        return $this->ogDescription;
    }

    /**
     * @param string $ogTitle
     *
     * @return $this
     */
    public function setOgTitle($ogTitle)
    {
        $this->ogTitle = $ogTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getOgTitle()
    {
        return $this->ogTitle;
    }

    /**
     * @return array
     */
    public function getOgProperties()
    {
        return array(
            'og:title'          => $this->getOgTitle(),
            'og:description'    => $this->getOgDescription()
        );
    }
}
