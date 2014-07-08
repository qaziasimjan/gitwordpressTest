<?php

/*
 Plugin Name: Test Plugin
Plugin URI: http://github.com/qaziasimjan/gitwordpress/
Description: test
Author: qaziasimjan
Version: 1.0
*/

class TestPlugin{
	static public function getHello()
	{
		return "Hello World!";
	}
	static public function getGoodBye()
	{
		return "See Ya";
	}
}
print_r(TestPlugin::getHello());