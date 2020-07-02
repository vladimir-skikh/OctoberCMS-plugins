<?php namespace Wdesighners\Contact\Components;

use Cms\Classes\ComponentBase;

use Input;
use Mail;

class ContactForm extends ComponentBase 

{

  public function componentDetails() {

    return [

      'name' => 'Contact Form',
      'description' => 'Simple contact form'

    ];
  }


  public function onSend() {

    $vars = ['name' => Input::get('consult_name'), 'phone' => Input::get('consult_phone'), 'question' => Input::get('consult_question')];

    Mail::send('wdesighners.contact::mail.message', $vars, function($message) {

        $message->to('office@medicina31.ru', 'Admin Person');
        $message->subject('Новое заявка на консультацию');

    });

  }
  public function onSubmit() {

    

  }

}