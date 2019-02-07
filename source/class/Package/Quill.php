<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Quill extends Package
{
    public function __construct()
    {

        $this->addJavascriptFile('vendor/quill/dist/quill.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/quill/dist/snow.css', self::RESOURCE_PRIORITY_INCLUDE);

        parent::__construct();

    }
}



