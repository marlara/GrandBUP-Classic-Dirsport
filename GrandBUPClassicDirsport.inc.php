<?php

/**
 * @defgroup plugins_themes_default_child GrandBUP-Classic-Dirsport
 */

/**
 * @file plugins/themes/GrandBUP-Classic-Dirsport/index.php
 *
 * Copyright (c) Lara Marziali
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @class GrandBUPClassicDirsport
 * @ingroup plugins_themes_GrandBUP-Classic-Dirsport
 *
 * @brief Default theme
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class GrandBUPClassicDirsport extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('childbupclassic');
		#$this->modifyStyle('stylesheet', array('addLess' => array('less/custom.less')));
		$this->addStyle('child-stylesheet', 'less/custom.less');
		$this->addScript('custom', 'js/custom.js');
		
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __("plugins.themes.GrandBUP-Classic-Dirsport.name");
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __("plugins.themes.GrandBUP-Classic-Dirsport.description");
	}
}

?>
