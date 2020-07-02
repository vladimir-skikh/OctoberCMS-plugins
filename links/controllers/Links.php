<?php namespace WDesighners\Links\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Links extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'wdesighners.links.manage_link' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('WDesighners.Links', 'Links', 'Link');
    }
}
