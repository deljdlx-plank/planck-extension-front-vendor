<?php

namespace Planck\Extension\FrontVendor\Package;

use Planck\View\Component;

class JQuery extends Component
{
    public function __construct()
    {

        parent::__construct();

        $this->addJavascriptFile('vendor/jquery/dist/jquery.js', self::RESOURCE_PRIORITY_REQUIRE);

    }
}



