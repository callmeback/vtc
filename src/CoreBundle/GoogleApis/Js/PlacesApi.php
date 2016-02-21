<?php

namespace CoreBundle\GoogleApis\Js;

class PlacesApi
{
    private $key;

    public function __construct($key = null)
    {
        $this->key = $key;
    }

    public function generateScriptSrc()
    {
        if ($this->key) {
            return 'https://maps.googleapis.com/maps/api/js?key=' . $this->key . '&signed_in=true&libraries=places';
        }
    }
}