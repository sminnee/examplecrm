<?php

class ContactAdmin extends ModelAdmin {
	static $menu_title = "Contacts";
	static $url_segment = "contacts";
	
	static $managed_models = array(
		"Contact",
	);
}