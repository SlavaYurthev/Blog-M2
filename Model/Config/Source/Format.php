<?php
/**
 * Blog
 * 
 * @author Slava Yurthev
 */
namespace SY\Blog\Model\Config\Source;

class Format implements \Magento\Framework\Option\ArrayInterface {
	public function toOptionArray(){
		return [
			'' => __('None'),
			'.html' => '.html'
		];
	}
}