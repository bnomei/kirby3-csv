<?php

use League\Csv\Writer;

$header = ['first name', 'last name', 'email'];
$records = [
    [1, 2, 3],
    ['foo', 'bar', 'baz'],
    ['john', 'doe', 'john.doe@example.com'],
];

//load the CSV document from a string
$csv = Writer::createFromString('');

//insert the header
$csv->insertOne($header);

//insert all the records
$csv->insertAll($records);

echo $csv->getContent(); //returns the CSV document as a string
