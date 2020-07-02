<?php namespace WDesighners\Services\Models;

use Model;

/**
 * Model
 */
class Analyzes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'wdesighners_services_analyzes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'category' => [
            'wdesighners\services\models\AnalysisCategories',
            'table' => 'wdesighners_services_analyzes_pivot',
            'order' => 'category_name',
        ]
    ];
}
