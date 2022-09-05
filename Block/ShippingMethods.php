<?php
namespace Test\Shipping\Block;

class ShippingMethods implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private $shippingMethods;

    /**
     * ShippingMethods constructor.
     * @param \Magento\Shipping\Model\Config\Source\Allmethods $shippingMethods
     */
    public function __construct(
        \Magento\Shipping\Model\Config\Source\Allmethods $shippingMethods
    )
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getShippingMethods()
    {
        return $this->shippingMethods->toOptionArray(true);
    }
    
    public function getTestData()
    {
        return "test123";
    }
    
}
