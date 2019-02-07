<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class FontAwesome extends Package
{
    public function __construct()
    {


        //$this->addFrontPackage(new JQuery());
        //$this->addJavascriptFile('vendor/bootstrap/dist/js/bootstrap.min.js', self::RESOURCE_PRIORITY_REQUIRE);

        $this->addCSSFile('vendor/fontawesome-free/css/all.css', self::RESOURCE_PRIORITY_REQUIRE);


        parent::__construct();
    }
}



