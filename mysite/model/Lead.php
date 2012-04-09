<?php

class Lead extends DataObject {
	static $db = array(
		"Name" => "Varchar",
		"Status" => "Enum('Open,Won,Lost,Cancelled','Open')",
	);
	
	static $has_one = array(
		"Company" => "Company",
	);
	
	static $belongs_many_many = array(
		"Contacts" => "Contact",
	);
}