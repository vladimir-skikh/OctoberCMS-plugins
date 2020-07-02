<?php namespace wdesighners\services\components;

use Cms\Classes\ComponentBase;
use wdesighners\services\models\Services;
use wdesighners\services\models\Categories;
use wdesighners\services\models\Analyzes;
//use wdesighners\services\models\AnalysisCategories;
use wdesighners\services\models\Doctors;

use Db;
use Request;
use Redirect;

class ServicesComponent extends ComponentBase 

{

  public function componentDetails() {

    return [

      'name' => 'Услуги',
      'description' => 'Компонент для вывода услуг медицинского центра'

    ];
  }

  

  protected function loadCategories() {
        return Db::table('wdesighners_services_categories')->orderBy('category_slug')->get();
  }
  protected function loadDoctors() {
        return Db::select( 'SELECT * FROM wdesighners_services_doctors GROUP BY specialty'); 
  }


  public $services, $categories, $id, $category_name, $doctors, $analysis_categories;

  
  
  public function onButtonClick() {
        $this->id = Request::post('category_id'); 
        $this->category_name = Request::post('category_name');
        if ($this->id === '1') {
            $this->doctors = $this->loadDoctors();
            $this->services = $this->loadServices($this->id); 
        }
        else {
            $this->services = $this->loadServices($this->id); 
        }
  }

  public function onDownloadServicesHandler()
  {    
        return Redirect::to('/download-services');
  }
  public function onDownloadAnalyzesHandler() {
        return Redirect::to('/download-analyzes');
  }
  
  protected function loadServices($category_id) {
        return Services::where('category_id', '=', $category_id)->get();
  }

  public function onRun() {
        $this->categories = $this->loadCategories();
  }
}









