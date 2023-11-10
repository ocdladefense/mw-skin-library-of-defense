<?php

class SkinExample extends SkinMustache {

    

/*A private member to hold the additional data ($additionalTempalteData)
A method to accept the additional data (setTemplateVariable)
A method to consolidate that data with similar array keys (array_merge_recursive_distinct)
A way to add the additional data to the data already passed ($data += $this->additionalTemplateData; under the current getTemplateData method):
*/
private $additionalTemplateData = [
    "entrance" => [
        "entrance-title" => "Main Entrance",
        "id" => "ocdla-main-entrance",
        "href" => "/Welcome_to_The_Library"
    ],
    "main-navigation-links" =>[
        [
            "text"=> "Home",
            "href"=>"#"
        ],
      [
        "text"=> "Blog",
        "href"=>"#"
      ],
      [
        "text"=> "Case Review",
        "href"=>"#"
      ],
      [
        "text"=> "OCDLA Books Online",
        "href"=>"#"
      ],
      [
        "text"=> "Resources",
        "href"=>"#"
      ],
      [
        "text"=> "Contributor Ryan Scott",
        "href"=>"#"
      ],
      [
        "text"=>"Make a Suggestion",
        "href"=>"#"
      ]
    ],
    "masthead-center-title" =>[
      "link-grid-id" =>"masthead-center",
    ],
    "masthead-text-top" =>[
      [
        "id" => "landing-page-title-Library",
        "text" =>"Library",
        "class"=>"ocdla-caps"
      ],
      [
        "id" => "landing-page-title-of",
        "text" =>"of",
        "class"=>""
      ],
      [
        "id" => "landing-page-title-Defense",
        "text" =>"Defense",
        "class"=>"ocdla-caps"
      ]
    ],
    "masthead-text-bottom" =>[
      [
        "text" =>"Editor in Chief: ",
        "class"=>"ocdla-caps"
      ],
      [
        "id" => "editor-name",
        "text" =>"Name Name",
        "class"=>""
      ]
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
      ],
    ]
];

public function getTemplateData() {

    $data = parent::getTemplateData();

    $data += $this->additionalTemplateData;
    return $data;
}
}