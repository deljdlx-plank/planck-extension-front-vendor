<?php

namespace Planck\Extension\FrontVendor\Package;


use Planck\View\Package;

class Planck extends Package
{
    public function __construct()
    {



        $this->addFrontPackage(new JQuery());

        $this->addFrontPackage(new Khi());


        $this->addJavascriptFile('vendor/planck-front/source/Planck.js', self::RESOURCE_PRIORITY_INCLUDE);

        $this->addJavascriptFile('vendor/planck-front/source/Router.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addJavascriptFile('vendor/planck-front/source/Controller.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addJavascriptFile('vendor/planck-front/source/Application.js', self::RESOURCE_PRIORITY_INCLUDE);

        $this->addJavascriptFile('vendor/planck-front/source/Model/Repository.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addJavascriptFile('vendor/planck-front/source/Model/Entity.js', self::RESOURCE_PRIORITY_INCLUDE);

        $this->addJavascriptFile('vendor/planck-front/source/DataLayer.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addJavascriptFile('vendor/planck-front/source/DataLayerEntry.js', self::RESOURCE_PRIORITY_INCLUDE);


        $this->addJavascriptFile('vendor/planck-front/source/Component/FileUploader.js', self::RESOURCE_PRIORITY_INCLUDE);
        $this->addJavascriptFile('vendor/planck-front/source/Component/DropZone.js', self::RESOURCE_PRIORITY_INCLUDE);


        parent::__construct();



    }
}



