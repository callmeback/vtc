<?php

namespace CoreBundle\Twig;

use CoreBundle\GoogleApis\Js\PlacesApi;

class CoreExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    private $placesApi;

    public function __construct(PlacesApi $placesApi)
    {
        $this->placesApi = $placesApi;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since 1.23 (to be removed in 2.0), implement Twig_Extension_GlobalsInterface instead
     */
    public function getGlobals()
    {
        return [
            'googleapis_js_places' => $this->placesApi->generateScriptSrc()
        ];
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'core_extension';
    }
}