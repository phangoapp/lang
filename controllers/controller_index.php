<?php

use PhangoApp\PhaRouter\Routes;
use PhangoApp\PhaRouter\Controller;
use PhangoApp\PhaI18n\I18n;

class indexController extends Controller {


	public function home($lang)
	{
		
		if(in_array($lang, I18n::$arr_i18n))
		{
		
			$_SESSION['language']=$lang;
			
			if($_SERVER['HTTP_REFERER']=='')
			{

				$_SERVER['HTTP_REFERER']=Routes::$root_url;

			}
			
			if(  preg_match('/\/lang\//', $_SERVER['HTTP_REFERER']) )
			{
			
				$_SERVER['HTTP_REFERER']=Routes::$root_url;
			
			}
			
			Routes::redirect($_SERVER['HTTP_REFERER']);
		
		}
	
	}

}

?>
