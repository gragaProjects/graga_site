<?php
//define('BASE_PATH', str_replace('\\', '/', __DIR__) . '/');

?>
<?php 

if($_SERVER['HTTP_HOST'] == 'localhost')
{
	$base_url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/graga/graga_website/site';
}else
{
	$base_url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'';
}
    

?>
