<?php

class CompanyAdmin extends ModelAdmin {
	static $menu_title = "Companies";
	static $url_segment = "companies";
	
	static $managed_models = array(
		"Company",
	);
}