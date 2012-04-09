<?php

class Contact extends DataObject {
	static $db = array(
		"FirstName" => "Varchar",
		"Surname" => "Varchar",
		"Email" => "Varchar",
		"Phone" => "Varchar",
	);
	
	static $has_one = array(
		"Company" => "Company",
	);

	static $many_many = array(
		"Leads" => "Lead",
	);

}