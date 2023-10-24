<?php

namespace MediaWiki\Skins\Example;

//using statements not related to Vector components
use ExtensionRegistry;
use MediaWiki\MediaWikiServices;
use RuntimeException;
use SkinMustache;
use SkinTemplate;

class ExampleSkin extends SkinMustache {

    public function getTemplateData(): array {
        $parentData = parent::getTemplateData();
        $portlets = $parentData['data-portlets'];


        $tocData = $parentData['data-toc'];
		$tocComponents = [];

        return array_merge( $parentData, [
			//'is-language-in-content' => $this->isLanguagesInContent(),
			//'has-buttons-in-content-top' => $this->isLanguagesInContentAt( 'top' ) || $hasAddTopicButton,
			//'is-language-in-content-bottom' => $this->isLanguagesInContentAt( 'bottom' ),
			//'is-main-menu-visible' => $this->isMainMenuVisible(),
			// Cast empty string to null
			'html-subtitle' => $parentData['html-subtitle'] === '' ? null : $parentData['html-subtitle'],
			'is-page-tools-enabled' => 'true'
		] );
    }

}