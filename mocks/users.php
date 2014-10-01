<?php

header('Content-Type=>application/json');

$data = array(
	'users'=>array(
		array(
			"id"=> 0, // PK
			"firstName"=> "John",
			"lastName"=> "Doe",
			"middleName"=> "James",
			"agentNetPassword"=> "abc123", // Reversible encryption
			"agentNetUserName"=> "julian_ne",
			"businessTitle"=> 0, // FK
			"contact"=>  0,
			"defaultOffice"=> 0, // can users be within multiple offices?
			"firm"=> 0, // FK
			"newPassword1"=> null,
			"newPassword2"=> null,
			"oldPassword"=> null,
			"photoDataURL"=> null,
			"roles"=> array(0, 1), // FK array
			"username"=> "firmAdmin" // Primary login method
		)
	),
	"offices"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Northeast Office"
		)
	),
	"addresses"=> array(
		array(
			"id"=> 0, // PK
			"city"=> "Tacoma",
			"cityIncorporated"=> false,
			"country"=> "US",
			"county"=> "Pierce",
			"state"=> "WA",
			"streetAddress1"=> "12345 A St S",
			"streetAddress2"=> "Ste 3",
			"zipCode"=> "99999"
		)
	),
	"firms"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Julian Test Firm",
			"logoDataURL"=> "data=>mage/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAABECAMAAAAxxM6LAAAAA3NCSVQICAjb4U/gAAAAV1BMVEUAM2b///9yjqo/ZYy2xNNArUmGy4zT4t4PP29RtFmfssWPpbzf5exOcZSz3rYfTHlovm9ff59/mbK/zNnr8fEvWYLP2eKvv89rjK2Wq8AoUn3v8vUSQHAOuH0KAAAAHXRSTlP/AP///////////////////////////////////+dDqOwAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzbovLKMAAAAFnRFWHRDcmVhdGlvbiBUaW1lADAzLzEzLzE0HpaO+wAAAvpJREFUaIHtmNmugyAQhkFUtKsHsY3W93/OQ0EFFFyA2l74J4YWXL7MwowC+OMC3wZY0gHoqwPQVwegrw5AX3kCAq4wKJYnrDuN1temBaBtrjXWLpeANM3zlGoX3dIiT5K8SG8fBoyvQFFTGwGLhKmQSzhNFOnoYQGphscRBytKwJsA6W1FNTx1JThg3I75mHoj2gBxPuZj1nUy4iJgbMCThBZAE58j4RIgHuzXXpmkNeMRoBqDVPLlRSH/FNbHuAM2fdgJIJkvLR0BKlncx19+4/9lujjE4QJgPYo5ZSoaAUrhiUt7l+fbnbwA2Ez4hqjkJjQCFt3Ookz1Tk/hVs0DYgFw1WcjSW0CxCZr9ZOBATsUrM9Sia0ACgI42RE7dXE4upUvoMiIZjwd12/FFsDUaCvsmCbzgI1MB8vlBsDcHG2WaT/AdpoiawEnpio+AWjI4WVAiy9Tt716Pwumn7CgLQYp1yzgPjFoyWIx3VoAix2z2GkfTOf2wc21LlwlGQDnKsn2fsa9FgNbDEJD3e1r8eZCErCbkYBdrTN0M9t7hYD9oATs25lJP+jAF7CjVgD7hjDROurc6bUp2DuJCjg4WRNj5YI4qmMWjDP7/xbAtW91GqCZMOlPqWkdQTzZXh0BIV71XqwDQlzMA9Y4mmmStgGu/LKgAzIj2hA5II3qgICrvs2MAYdvM1NATDGMaRwS8HtyBCy5rMuP2dVNcgRUXGsSml3d9iTXCwmaWUSED+XL9e5SQQHLU/ejAwQB3BwUcJjrAMnF9e5SHwUMIU/AJyHkzHzLhhM8oTsRTlUsSJ4n8mRDWZLzpXyfvCsgqBBikSaG6J4hEYUIvYF5DAKQVYCnPeLH1rD0BSz50Q3SxXeEomG1fAM+u+M7gFnE/TmOwW71gYaf+wMKFz8y9ILTJFGIvgb4x9KDsb2q++M3AcXzWMn4y6wu/jagKUl+B/Bclm9AMZCqvPwYYMX2tuwlhgt8AkB+BnAvHYC+OgB9dQD66gD01QHoq3+k1k9yGnQ7VwAAAABJRU5ErkJggg==",
			"status"=> "Active", // Should be a FK to statuses
			"timeout"=> 26000
		)
	),
	"contacts"=> array(
		array(
			"id"=> 0, // PK
			"address"=> 0, // FK
			"addressSource"=> 0, // FK
			"businessTitle"=> 0, // FK
			"emailAddresses"=> array(0), // FK array
			"enabled"=> true,
			"firstName"=> "John",
			"forwardAddress"=> 0, // FK
			"forwardAddressSource"=> 0, // FK
			"honorificId"=> 0, // FK
			"lastName"=> "Doe",
			"middleName"=> "James",
			"phoneNumbers"=> array(0), // FK array
			"primaryContact"=> true,
			"signatoryMode"=> 0, // FK
			"signatoryName"=> "Some Business Name", // Should be a FK to a signatory contact
			"socialSecurityNumber"=> "555-55-5555",
			"suffix"=> "Sr.",
			"taxIdNumberIsEIN"=> false,
			"type"=> 0 // FK
		)
	),
	"honorifics"=>array(
		array(
			"id"=> 0,
			"name"=> "General"
		)
	),
	"businessTitles"=> array(
		array(
			"id"=> 0,
			"name"=> "President"
		),
		array(
			"id"=> 0,
			"name"=> "Vice President"
		)
	),
	"addressSources"=> array(
		array(
			"id"=> 0,
			"name"=> "None"
		)
	),
	"emails"=> array(
		array(
			"id"=> 0,
			"address"=> "fadmin@firstam.com",
			"isPrimary"=> true,
			"note"=> null,
			"type"=> 0 // FK
		)
	),
	"emailTypes"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Work"
		)
	),
	"forwardAddressSources"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Current"
		)
	),
	"phoneNumbers"=> array(
		array(
			"id"=> 0, // PK
			"extension"=> null,
			"isPrimary"=> true,
			"note"=> null,
			"number"=> "123-555-5555",
			"type"=> 0 //FK
		)
	),
	"phoneNumberTypes"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Home"
		)
	),
	"signatoryModes"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "Contact"
		)
	),
	"contactTypes"=> array(
		array(
			"id"=> 0, // PK
			"name"=> "President"
		)
	),
	"roles" => array(
		array(
			"id"=> 0,
			"name"=>"Company Admin"
		),
		array(
			"id"=> 1,
			"name"=>"Closing Officer"
		)
	)
);

echo json_encode($data);