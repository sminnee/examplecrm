<?php

class MemberExtension extends DataExtension {
	
	function extraStatics() {
		return array(
			'has_one' => array(
				'FavouriteCompany' => 'Company',
			),
		);
	}
	
}