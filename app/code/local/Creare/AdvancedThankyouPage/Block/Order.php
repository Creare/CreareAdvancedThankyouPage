<?php
class Creare_AdvancedThankyouPage_Block_Order extends Mage_Checkout_Block_Onepage_Success
{
	public function getAllProductsFromOrder($orderid){
		$order = Mage::getModel('sales/order')->loadByIncrementId($orderid);
		$giftMessage = Mage::getModel("giftmessage/message")->load($order->getGiftMessageId());
		$address = trim($order->getShippingAddress()->getFormated(true));
		$items = $order->getAllItems();                  
		$total = $order->getGrandTotal();
			
		return array($total,$items,$giftMessage,$address);
		
	}
}
