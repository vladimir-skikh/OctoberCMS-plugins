<?php namespace WDesighners\Services\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class AnalisisCategories extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'wdesighners.services.manage_analisis_categories' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('WDesighners.Services', 'Services', 'analisis_categories');
    }
}
