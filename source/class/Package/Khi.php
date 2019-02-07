<?php

namespace Planck\Extension\FrontVendor\Package;

use Planck\View\Component;

class Khi extends Component
{
    public function __construct()
    {


        $this->addJavascriptFile('vendor/khi/bootstrap.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/AjaxForm.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/Application.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/Routing/Request.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/Routing/Route.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/Routing/Router.js', self::RESOURCE_PRIORITY_REQUIRE);
        $this->addJavascriptFile('vendor/khi/source/ModuleLoader.js', self::RESOURCE_PRIORITY_REQUIRE);




        parent::__construct();



    }
}



