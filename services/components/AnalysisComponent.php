<?php namespace Wdesighners\Services\Components;

use Cms\Classes\ComponentBase;
use wdesighners\services\models\AnalysisCategories;
use wdesighners\services\models\Analyzes;

use Db;
use Request;

class AnalysisComponent extends ComponentBase 

{

  public function componentDetails() {

    return [

      'name' => 'Analyzes',
      'description' => 'Component for table of analyzes'

    ];
  }

  

  public $analyzes, $analysis_category_name, $analysis_categories;

  public function onAnalysisCategoryClick() {
    $analysis_category_id = Request::post('analysis_category_id'); 
    $this->analysis_category_name = Request::post('analysis_category_name'); 
    $this->analyzes = $this->loadAnalyzes($analysis_category_id); 
  }

  protected function loadAnalyzes($category_id) {
    return Analyzes::where('category_id', '=', $category_id)->get();
  }
  public function onRun() {
     $this->analysis_categories = Db::table('wdesighners_services_analyzes_categories')->orderBy('category_name', 'asc')->get();
  }
  public function onSubmit() {}
  public function onAnalisisLinkHandler () {}
}