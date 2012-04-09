<?php

class Company extends DataObject {
	static $db = array(
		"Name" => "Varchar",
		"Address" => "Text",
		"Website" => "Varchar",
	);
	
	static $has_one = array(
		"MainContact" => "Contact",
	);

	static $has_many = array(
		"Contacts" => "Contact",
		"Leads" => "Lead",
	);
}