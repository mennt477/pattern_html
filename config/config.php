<?php

define('BASE_PATH', realpath(dirname(__FILE__)."/.."));
$BASE_PATH_cus = str_replace(DIRECTORY_SEPARATOR, '/', BASE_PATH);
$root = $_SERVER['DOCUMENT_ROOT'];
$str = str_replace($root, "", $BASE_PATH_cus);

define('LOCATION', 'http://'.$_SERVER['SERVER_NAME'].$str."/");

/* SSL */
$ssl = str_replace('http', 'https', LOCATION);
if(empty($_SERVER['HTTPS'])) define('LOCATION_FILE', LOCATION);
else define('LOCATION_FILE', $ssl);

define('TITLE', 'TITLE');
define('KEYWORDS', 'key,key,key,key,key,key,key,key,key');
define('DESCRIPTION', 'DESCRIPTION');


//meta
$meta = array(
	'title' => TITLE,
	'keywords' => KEYWORDS,
	'description' => DESCRIPTION
);


/*--	Main page
--------------------------------------------------*/

#home page
if($page == 'homepage') {
	$meta['title'] = TITLE;
	$meta['keywords'] = KEYWORDS;
	$meta['description'] = DESCRIPTION;
}

#copy
if($page == 'copy') {
	$meta['title'] = 'Copy | '.TITLE;
	$meta['keywords'] = KEYWORDS.',Copy';
	$meta['description'] = DESCRIPTION;
}

?>
