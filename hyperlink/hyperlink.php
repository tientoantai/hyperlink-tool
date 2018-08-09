<?php

$file = new SplFileObject('uploaded/20180807_65000-Sheet1.csv');
$data = array();
while (!$file->eof()) {
    $data[] = $file->fgetcsv();
}
$file1 = new SplFileObject('new/20180807_65000-Sheet1_new.csv', 'w');
foreach ($data as $k => $item) {
	$link = $item[1];
	$new = "=Hyperlink(\"" . $link . "\",\"" . $link . "\")";
	
    $file1->fputcsv([$new]);
}
