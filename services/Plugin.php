<?php namespace WDesighners\Services;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'wdesighners\services\components\ServicesComponent' => 'services_list',
            'Wdesighners\Services\Components\AnalysisComponent' => 'analysis_list'
        ];
    }

    public function registerSettings()
    {
    }
}
