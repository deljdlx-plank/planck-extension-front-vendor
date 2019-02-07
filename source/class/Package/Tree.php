<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Tree extends Package
{
    public function __construct()
    {


        $this->addFrontPackage(new JQuery());

        $this->addJavascriptFile('vendor/jstree/dist/jstree.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/jstree/dist/themes/default/style.css', self::RESOURCE_PRIORITY_INCLUDE);

        parent::__construct();

    }
}



