<?php

class SkinExample extends SkinMustache {

    /**
	 * Extends getPortletData function
	 */
	protected function getPortletsData( $label, array $urls = [] )
	{
		$data = parent::getPortletData( $label, $urls );

		// Sanitize and standardize links
		foreach ( $urls as $key => $item ) {
		    
		    $item['text'] ??= (!is_int($key) ? wfMessage( $key )->text() : '');
		    
		    if ($item['class'] == 'selected') $item['class'] = 'active';
		    
		    if ($item['links']) {
		        $item = $item['links'][0];
		        unset($item['links']);
		    }
		
			$data['array-links'][] = [is_int($key) ? $item['text'] : $key => $item];
		}

		return $data;
	}

/*A private member to hold the additional data ($additionalTempalteData)
A method to accept the additional data (setTemplateVariable)
A method to consolidate that data with similar array keys (array_merge_recursive_distinct)
A way to add the additional data to the data already passed ($data += $this->additionalTemplateData; under the current getTemplateData method):
*/
private $additionalTemplateData = [
    "entrance" => [
        "entrance-title" => "Library of Defense Main Entrance",
        "id" => "ocdla-main-entrance",
        "href" => "/Welcome_to_The_Library"
    ],
    "masthead-nav-links" =>[
        [
            "text" =>"Ocdla Home",
            "href"=>"https://www.ocdla.org/",
            "link-grid-id" =>"link-left-top"
        ],
        [
            "text" =>"Get Involved",
            "href" =>"/OCDLA_Legislative_Committee",
            "link-grid-id" =>"link-left-bottom"
        ],
        [
            "text" =>"Report a Problem",
            "href" =>"#",
            "link-grid-id"=>"link-right-top"
        ],
        [
            "text"=>"Edit Site",
            "href" =>"/How_To_Edit",
            "link-grid-id"=>"link-right-bottom"
        ]
    ]
    
];

public function getTemplateData() {

    $data = parent::getTemplateData();

    $data += $this->additionalTemplateData;
    return $data;
}
}