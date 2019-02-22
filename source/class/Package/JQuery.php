<?php

namespace Planck\Extension\FrontVendor\Package;


use Phi\HTML\JavascriptFile;
use Planck\View\Package;

class JQuery extends Package
{

    /**
     * @var JavascriptFile
     */
    private $jQuery;

    public function __construct()
    {

        parent::__construct();

        $this->addJavascriptFile('vendor/jquery/dist/jquery.js', self::RESOURCE_PRIORITY_REQUIRE);

    }




}



