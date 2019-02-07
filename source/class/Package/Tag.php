<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Tag extends Package
{
    public function __construct()
    {

        $this->addJavascriptFile('vendor/magicsuggest/magicsuggest-min.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/magicsuggest/magicsuggest-min.css', self::RESOURCE_PRIORITY_INCLUDE);

        parent::__construct();

    }
}



