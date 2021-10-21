<?php
	$anArray = [
		[
			'name' => 'Peter Parker',
			'email' => 'peterparker@mail.com'
			'job'	=> 'news photographer'
		],
		[
			'name' => 'Clark Kent',
			'email' => 'clarkkent@mail.com'
			'job' => 'journalist'
		],
		[
			'name' => 'Bruce Wayne',
			'email' => 'brucewayne@mail.com'
			'job' => 'CEO wayne enterprises'
		],
		[
			'name' => 'Harry Potter',
			'email' => 'harrypotter@mail.com'
			'job' => 'wizard'
		],
	];
	$anArray[]= array(
		'name' => 'Nat Storey',
		'email' => 'natstorey@mail.com'
		'job' => 'retail associate'
		);
	var_dump($anArray)
	//im not sure how to convert to XML and the search results all were long code
	//first attempt was $characters = xml_encode($anArray);
	//second feature I tried another code that I found on https://stackoverflow.com/questions/1397036/how-to-convert-array-to-simplexml
	$characters = new SimpleXMLElement('<root/>');
	array_walk_recursive($anArray, array ($characters, 'addChild'));
	print $character->asXML();
	$handler = fopen("characters.XML",'x+');
?>
