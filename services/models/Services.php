<?php namespace WDesighners\Services\Models;

use Model;
use Db;
/**
 * Model
 */
class Services extends Model
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
    public $table = 'wdesighners_services_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [
            'wdesighners\services\models\Categories',
            'table' => 'wdesighners_services_pivot',
            'order' => 'category_name',
        ]
    ];
    

    public function getSpecialtyOptions()
    {

        return Db::table('wdesighners_services_doctors')->groupBy('specialty')->pluck('specialty','specialty');
    }
}
