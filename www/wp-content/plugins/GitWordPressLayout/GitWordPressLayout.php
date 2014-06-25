<?php
/*
 Plugin Name: gitwordpress Layout
Plugin URI: http://github.com/rhildred/gitwordpress/
Description: Layouts inspired by razor/web matrix
Author: Rich Hildred
Version: 1.0
Author URI: http://syndicateme.net/
*/

class GitWordPressLayout{
	public static $Viewbag = ['bInLayout'=> false];
	
	public static function layout($sLayout){
		if(!GitWordPressLayout::$Viewbag['bInLayout']){
			GitWordPressLayout::$Viewbag['bInLayout'] = true;
			$sTemplate = get_page_template()?basename(get_page_template()):'index.php';
			GitWordPressLayout::$Viewbag['sPage'] = str_replace('.php','',$sTemplate);
			include_once get_template_directory() . '/' . $sLayout;
			//don't want to output anything from the layout the first time
			exit;
		}
	}
	
	public static function renderBody(){
		include get_template_directory() . '/'. GitWordPressLayout::$Viewbag['sPage'] . '.php';
	}
}