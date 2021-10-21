<?php
	$anArray = [
		[
			'name' => 'Peter Parker',
			'email' => 'peterparker@mail.com'
		],
		[
			'name' => 'Clark Kent',
			'email' => 'clarkkent@mail.com'
		],
		[
			'name' => 'Bruce Wayne',
			'email' => 'brucewayne@mail.com'
		],
		[
			'name' => 'Harry Potter',
			'email' => 'harrypotter@mail.com'
		],
	];
	$anArray[]= array(
		'name' => 'Nat Storey',
		'email' => 'natstorey@mail.com'
		);
	var_dump($anArray)
	//im not sure how to convert to XML and the search results all were long code
	$characters = xml_encode($anArray);
	$handler = fopen("characters.XML",'x+');
?>
