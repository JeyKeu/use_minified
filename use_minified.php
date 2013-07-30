<?php

#!/usr/bin/php
/**
 * This function reads the file contents and replaces any script and stylesheet 
 * names within the file with the minified ones.
 * it simply replaces existing names and appends a .min and saves the the content
 * back to the file.
 * @param string $file
 * @return returns false on failure,when a file doen't exist
 * 9:34 PM 3/27/2012
 * @author Junaid Qadir Baloch <shekhanzai.baloch@gmail.com>
 */
 
 
$param = trim($argv[1]);
if ((sizeof($argv) < 2) OR empty($param)) {
    print "You must specify a file name.";
} else {
    useMinified($param);
}

function useMinified($file) {
    if (!file_exists($file)) {
  echo "The file $file doesn't exist. exiting...";
	exit(0);
    }
    $content = file_get_contents($file);
    $patternJs = "/js\/(.*)(?<!min)\.js/";
    $patternCss = "/css\/(.*)(?<!min)\.css/";
    $content = preg_replace($patternJs, "js/$1.min.js", $content);
    $content = preg_replace($patternCss, "css/$1.min.css", $content);
    file_put_contents($file, $content);
    echo 'Done.';
    exit(0);
}

?>
