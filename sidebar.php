<?php

echo "<pre>";
print_r($_SERVER);

exit;
require_once 'database.php';
$Data =  new Database();

$load = $_POST['load'];
switch($load ){
	case 'loadSidebarHref': 
							$getUserApiDBObject = $Data->select('SELECT id,api_name FROM dim_api WHERE published = :published',['published' => 1]); 

							$dataReturned = $getUserApiDBObject->fetchAll();
							$rowsCount = $getUserApiDBObject->rowCount();


							$sandboxSidebarApiPopulate = '';
							foreach($dataReturned as $apiList){

								$sandboxSidebarApiPopulate .= '<div class="side_div" loadapiform ="'.$apiList['id'].'" >'.$apiList['api_name'].'</div>';

							}

							echo $sandboxSidebarApiPopulate;
				break;

	case 'loadApiCustomForm': 
							$loadForm = $_POST['loadForm'];  
							$getUserApiDBObject = $Data->select('SELECT `id`,`api_name`,`api_url`,`formdata`,`method`,`header`,`description` FROM `dim_api` WHERE `id` = :id AND `published` = :published',['published' => 1, 'id' => $loadForm ]); 

							$dataReturned = $getUserApiDBObject->fetchAll();
							$rowsCount = $getUserApiDBObject->rowCount();

							$formHTML = '<form name= "processFormData" id= "processFormData" class="processFormData">
												<div class="card text-left">
												  <div class="card-header">
												    <ul class="nav nav-tabs card-header-tabs">
												      <li class="nav-item">
												        <a class="nav-link active" href="#">Api form</a>
												      </li>
												      <li class="nav-item">
												        <a class="nav-link" href="#">Document</a>
												      </li>
												      <li class="nav-item">
												        <a class="nav-link" href="#">Example</a>
												      </li>
												    </ul>
												  </div><div class="card-body">';
							
							foreach($dataReturned as $apiList){

								$formHTML .= '<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    <span class="input-group-text" id="basic-addon3">Destination URL</span>
											  </div>
										  	<input type="text" readonly class="form-control" id="basic-url" aria-describedby="basic-addon3" value="'.getenv('api_server').$apiList['api_url'].'">
										 </div>';

								$formDataDecoded = json_decode($apiList['formdata'],JSON_OBJECT_AS_ARRAY);
							
								foreach($formDataDecoded as $formRoot => $formFields) {

								$formHTML .= '	
											  	<div class="form-group">
												    <label for="label'.$formFields['name'].'">'.$formRoot.' ['.$formFields['id'].']</label>
												    <input type="'.$formFields['type'].'" name="'.$formFields['id'].'" class="form-control" id="'.$formFields['id'].'" aria-describedby="emailHelp" placeholder="'.$formFields['placeholder'].'">
											    </div>
											  ';
								}
							}

							$formHTML .= '	<div class="form-group">
												   
												    <a href="#" class="btn btn-primary">Submit</a>
											    </div>	
											</div>
											</div>
										</form>';

							echo $formHTML;

				break;

	default: echo 'incorrect option from sidebar selected';
}


