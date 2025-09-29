<?php

namespace Apps\Fintech\Components\System\Geo\Timezones\Install;

use System\Base\BasePackage;
use System\Base\Providers\ModulesServiceProvider\WidgetInstaller;

class Install extends BasePackage
{
    protected $widgetInstaller;

    public function init()
    {
        $this->widgetInstaller = new WidgetInstaller;

        return $this;
    }

    public function install()
    {
        $this->installWidget();

        return true;
    }

    protected function installWidget()
    {
        $this->widgetInstaller->installWidget($this);

        return true;
    }

    public function uninstall($remove = false)
    {
        if ($remove) {
            $this->widgetInstaller->uninstallWidget($this);
        }

        return true;
    }
}