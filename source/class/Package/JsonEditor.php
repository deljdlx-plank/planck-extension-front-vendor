<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class JsonEditor extends Package
{
    public function __construct()
    {


        $this->addFrontPackage(new JQuery());

        $this->addJavascriptFile('vendor/jsoneditor/dist/jsoneditor.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/jsoneditor/dist/jsoneditor.css', self::RESOURCE_PRIORITY_INCLUDE);

        parent::__construct();

    }
}



