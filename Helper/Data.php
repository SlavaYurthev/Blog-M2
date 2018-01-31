<?php
/**
 * Blog
 * 
 * @author Slava Yurthev
 */
namespace SY\Blog\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Store\Model\StoreManagerInterface;
use \Magento\Framework\ObjectManagerInterface;
use \Magento\Framework\App\Helper\Context;
use \Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper {
	public function getConfigValue($field, $storeId = null){
		return $this->scopeConfig->getValue('sy_blog/'.$field, ScopeInterface::SCOPE_STORE, $storeId);
	}
}