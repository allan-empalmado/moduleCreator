<?php
{{License}}
/**
 * {{EntityLabel}} edit form
 *
 * @category	{{Namespace}}
 * @package		{{Namespace}}_{{Module}}
 * {{qwertyuiop}}
 */
class {{Namespace}}_{{Module}}_Block_Adminhtml_{{Entity}}_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{
	/**
	 * prepare form
	 * @access protected
	 * @return {{Namespace}}_{{Module}}_Block_Adminhtml_{{Entity}}_Edit_Form
	 * {{qwertyuiop}}
	 */
	protected function _prepareForm(){
		$form = new Varien_Data_Form(array(
						'id' 		=> 'edit_form',
						'action' 	=> $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
						'method' 	=> 'post',
						'enctype'	=> 'multipart/form-data'
					)
		);
		$form->setUseContainer(true);
		$this->setForm($form);
		return parent::_prepareForm();
	}
}