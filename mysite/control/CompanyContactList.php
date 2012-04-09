<?php

class CompanyContactList extends Controller {
	protected $company;
	
	function init() {
		parent::init();
		if(!$this->urlParams['ID']) {
			throw new SS_HTTPResponse_Exception("Please pass a company ID", 404);
		}
		
		$id = $this->urlParams['ID'];
		$this->company = Company::get()->byID($id);
		if(!$this->company) {
			throw new SS_HTTPResponse_Exception("Can't find company #$id", 404);
		}
	}
	
	function Company() {
		return $this->company;
	}
	
}