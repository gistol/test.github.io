<?php 

/** 
* Generated at: 2017-10-11T11:17:25+02:00
* IP: 81.18.148.142


Fields Summary: 
 - auth_token [input]
 - auth_PayerID [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderPayPal extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "PaymentProviderPayPal";
public $auth_token;
public $auth_PayerID;


/**
* Set auth_token - Token
* @return string
*/
public function getAuth_token () {
	$data = $this->auth_token;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_token")->isEmpty($data)) {
		return $this->getValueFromParent("auth_token");
	}
	 return $data;
}

/**
* Set auth_token - Token
* @param string $auth_token
* @return \Pimcore\Model\DataObject\PaymentProviderPayPal
*/
public function setAuth_token ($auth_token) {
	$this->auth_token = $auth_token;
	return $this;
}

/**
* Set auth_PayerID - PayerID
* @return string
*/
public function getAuth_PayerID () {
	$data = $this->auth_PayerID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PayerID")->isEmpty($data)) {
		return $this->getValueFromParent("auth_PayerID");
	}
	 return $data;
}

/**
* Set auth_PayerID - PayerID
* @param string $auth_PayerID
* @return \Pimcore\Model\DataObject\PaymentProviderPayPal
*/
public function setAuth_PayerID ($auth_PayerID) {
	$this->auth_PayerID = $auth_PayerID;
	return $this;
}

}

