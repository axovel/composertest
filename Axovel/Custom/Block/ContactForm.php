<?php
namespace Axovel\Custom\Block;
use Magento\Framework\View\Element\Template;
class ContactForm extends \Magento\Contact\Block\ContactForm  {
    public function getFormAction()    {

        return $this->getUrl('contact/index/post', ['_secure' => true]);
}
}
