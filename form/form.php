<?php
  
  require_once '../database.php';	

  class form extends DataBase {

  	protected $builtForm = array();

  	protected function inputText($inputtextBoxParameters = array()): array{

  		if(!is_array($inputtextBoxParameters) && count($inputtextBoxParameters) > 0) {
  			return array('inputtextBoxParameters are blank');
  		}
  	}

  	function __call($functionName = '', $arguments = array()){

  		switch($functionName) {
  			case 'inputTextBox':  $this->buildInputTextBox($arguments); break;
  			case 'inputRadioButton': $this->buildInputRadioButton($arguments); break;
  			default : return 'error';
  		}
  	}

  	protected function buildInputTextBox($attributes){
  		echo '<input type="text">';
  	}
  	protected function buildInputRadioButton($attributes){
  		echo '<input type="radio">';
  	}
  }
  
/*
*/
$form = new form();
$form->inputTextBox(array('name' => 'myInputBox', 'id' => 'myInputBox'));
$form->inputRadioButton(array('name' => 'myInputRadio', 'id' => 'myInputRadio'));
