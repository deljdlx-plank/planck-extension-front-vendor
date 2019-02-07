<?php

namespace Planck\Extension\FrontVendor\Package;

use Planck\View\Component;

class SyntaxHighlighter extends Component
{
    public function __construct()
    {
        parent::__construct();

        $this->addJavascriptFile('vendor/prism/prism.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addCSSFile('vendor/prism/prism.css', self::RESOURCE_PRIORITY_INCLUDE);


    }
}



