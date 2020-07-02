<?php namespace WDesighners\Services\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Doctors extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'wdesighners.services.manage_doctors' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('WDesighners.Services', 'Services', 'doctors');
    }
}
