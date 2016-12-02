<?php
class JustBetter_CacheBuster_Model_Design_Package extends Mage_Core_Model_Design_Package {

	/**
	 * Merge specified css files and return URL to the merged file on success
	 *
	 * @param $files
	 * @return string
	 */
	public function getMergedCssUrl($files)
	{
		$url = Parent::getMergedCssUrl($files);
		$absolutePath = Mage::getBaseDir('media').'/'.str_replace(Mage::getBaseUrl('media'),'',$url);
		return $url.'?v='.filemtime($absolutePath);
	}

	/**
	 * Merge specified javascript files and return URL to the merged file on success
	 *
	 * @param $files
	 * @return string
	 */
	public function getMergedJsUrl($files)
	{
		$url = Parent::getMergedJsUrl($files);
		$absolutePath = Mage::getBaseDir('media').'/'.str_replace(Mage::getBaseUrl('media'),'',$url);
		return $url.'?v='.filemtime($absolutePath);
	}

}