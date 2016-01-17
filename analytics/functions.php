<?php
//Return array with link name and click list
function getClickList()
{
    $fileList = scandir('db');
    $clickList=array();
    for ($i = 0; $i < count($array); ++$i) {
        $flines = readAllLines($fileList[i]);
        $hits=$flines[0];
        $url=$flines[1];
        $clickList[$url]=$hits;
    }
    return $clickList;
}
function readAllLines($fn)
{
    //turn file into array
    $lines = file($fn, FILE_IGNORE_NEW_LINES);
    return $lines;
}
function writeAllLines($fn, $lines)
{
    //save contents from array
    file_put_contents($fn, implode(PHP_EOL, $lines));
}
?>