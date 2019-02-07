<?php

namespace Planck\Extension;


use Planck\Application;
use Planck\Extension;

class FrontVendor extends Extension
{


    public function __construct(Application $application)
    {
        parent::__construct($application, 'Planck\Extension\FrontVendor', __DIR__.'/../..');

    }


}
