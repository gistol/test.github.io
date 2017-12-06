<?php 

/** 
* Generated at: 2017-10-11T11:17:20+02:00
* IP: 81.18.148.142


Fields Summary: 
 - name [input]
 - netAmount [numeric]
 - amount [numeric]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class OrderPriceModifications extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "OrderPriceModifications";
public $name;
public $netAmount;
public $amount;


/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\OrderPriceModifications
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get netAmount - NetAmount
* @return string
*/
public function getNetAmount () {
	$data = $this->netAmount;
	 return $data;
}

/**
* Set netAmount - NetAmount
* @param string $netAmount
* @return \Pimcore\Model\DataObject\OrderPriceModifications
*/
public function setNetAmount ($netAmount) {
	$this->netAmount = $netAmount;
	return $this;
}

/**
* Get amount - Amount
* @return string
*/
public function getAmount () {
	$data = $this->amount;
	 return $data;
}

/**
* Set amount - Amount
* @param string $amount
* @return \Pimcore\Model\DataObject\OrderPriceModifications
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

}

