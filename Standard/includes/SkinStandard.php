<?php
/**
 * SkinTemplate class for the Standard skin
 *
 * @ingroup Skins
 */
class SkinStandard extends SkinTemplate {
	public $skinname = 'standard',
		$stylename = 'Standard',
		$template = 'StandardTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.standard'
		] );
		$out->addModules( [
			'skins.standard.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
