<?php

class LeadAdmin extends ModelAdmin {
	static $menu_title = "Leads";
	static $url_segment = "leads";
	
	static $managed_models = array(
		"Lead",
	);
}