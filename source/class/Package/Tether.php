<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Tether extends Package
{
    public function __construct()
    {

        parent::__construct();


        $this->addCSSFile('vendor/tether/dist/css/tether.min.css', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addCSSFile('vendor/tether/dist/css/tether-theme-arrows.min.css', self::RESOURCE_PRIORITY_REQUIRE);

        $this->addJavascriptFile('vendor/tether/dist/js/tether.min.js', self::RESOURCE_PRIORITY_REQUIRE);

    }
}



