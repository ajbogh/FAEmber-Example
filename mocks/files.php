<?php

header('Content-Type=>application/json');

$data = array(
	'files'=>array(
		array(
			'id'=> 1,
			'fileNumber'=>'2014-08-27-1',
			'closingDate'=>null,
			'buyerShortName'=>null,
			'sellerShortName'=>'',
			'fileStatus'=>0,
			"alternateNumber"=> null,
			"fileType"=> 1,
			"fileTypeLookupId"=> 9,
			"possibleDuplicateFileParties"=> null,
			"sellerShortName"=> null,
			"transactionType"=> 5,
			"address"=> 8,
			"underwriter"=> 0,
			"office"=> 0
		),
		array(
			'id'=> 2,
			'fileNumber'=>'2014-07-14-1',
			'closingDate'=>null,
			'buyerShortName'=>null,
			'sellerShortName'=>'',
			'fileStatus'=>0,
			"alternateNumber"=> null,
			"fileType"=> 2,
			"fileTypeLookupId"=> 9,
			"possibleDuplicateFileParties"=> null,
			"sellerShortName"=> null,
			"transactionType"=> 5,
			"address"=> 7,
			"underwriter"=> 1,
			"office"=> 1
		)
	),
	'fileTypes'=>array(
		array(
			'id'=>0,
			'name'=>'Escrow'
		),
		array(
			'id'=>1,
			'name'=>'Title'
		),
		array(
			'id'=>2,
			'name'=>'Escrow and Title'
		)
	),
	'underwriters'=>array(
		array(
			'id'=>0,
			'name'=>'First American Title'
		),
		array(
			'id'=>1,
			'name'=>'Northwest Title and Escrow'
		)
	),
	'offices'=>array(
		array(
			'id'=>0,
			'name'=>'Northwest Office'
		),
		array(
			'id'=>1,
			'name'=>'Northeast Office'
		)
	),
	'fileStatuses'=>array(
		array(
			'id'=>0,
			'name'=>"Open"
		)
	),
	'transactionTypes'=>array(
		array(
			"businessLineIds"=> null,
			"active"=> false,
			"description"=> "Sale",
			"firmId"=> null,
			"lookup"=> "Unknown",
			"value"=> null,
			"extra"=> null,
			"id"=> 5
		)
	),
	'addresses'=>array(
		array(
			"city"=> "Tacoma",
			"cityIncorporated"=> "Unknown",
			"country"=> null,
			"county"=> "Pierce",
			"state"=> "WA",
			"streetAddress1"=> "12345 A St. S",
			"streetAddress2"=> null,
			"zipCode"=> "99999",
			"id"=> 8
		),
		array(
			"city"=> "Tacoma",
			"cityIncorporated"=> "Unknown",
			"country"=> null,
			"county"=> "Pierce",
			"state"=> "WA",
			"streetAddress1"=> "34567 C St. E",
			"streetAddress2"=> null,
			"zipCode"=> "99999",
			"id"=> 7
		)
	)
);

//returns a single file if the id param is used.
if(!empty($_GET['id'])){
	foreach($data['files'] as $file){
		if($file['id'] == $_GET['id']){
			$data['files'] = array($file);
			//unset($data['files']);
			break;
		}
	}
}

echo json_encode($data);