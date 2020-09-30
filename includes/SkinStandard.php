<?php
/**
 * SkinTemplate class for the Standard skin
 *
 * @ingroup Skins
 */
class SkinStandard extends SkinMustache {
	public $template = 'StandardTemplate';

	/**
	 * @inheritDoc
	 */
	public function getTemplateData() {
		$data = parent::getTemplateData();
		$tpl = $this->prepareQuickTemplate();
		$tplData = $tpl->execute();
		return $data + $tplData + [
			'standard-main-page-url' => self::makeMainPageUrl(),
		];
	}
}
