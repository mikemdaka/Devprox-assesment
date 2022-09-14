<?php

// accept array and download csv file
function downloadCsv($array) {
    
    if (count($array) == 0) {
        return null;
    }
    
    $filename = "output.csv";

    //set the headers and file name
    header("Content-Disposition: attachment;filename={$filename}");
    header("Content-Transfer-Encoding: binary");

    $df = fopen("output/output.csv", 'w');
    fputcsv($df, array_keys(reset($array)));
    foreach ($array as $row) {
        fputcsv($df, $row);
    }
    fclose($df);
    die();    
}

?>