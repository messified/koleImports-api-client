<?php

namespace tests\KoleImports\DropshipApi\Model\Request\AddressTest;

use KoleImports\DropshipApi\Model\Request\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    public function testValidAddress()
    {
        $addressRequestModel = new Address();

        $addressRequestModel->setFirstName('Jesse');
        $addressRequestModel->setLastName('Reese');
        $addressRequestModel->setCompany('Test Company');
        $addressRequestModel->setaddress1('1234 Test St.');
        $addressRequestModel->setAddress2('Suite 2');
        $addressRequestModel->setCity('Los Angeles');
        $addressRequestModel->setState('CA');
        $addressRequestModel->setZipCode('90291');
        $addressRequestModel->setExtZipcode('1234');
        $addressRequestModel->setCountry('US');
        $addressRequestModel->setPhone('555-555-5555');

        $this->assertInternalType('string', $addressRequestModel->getFirstName());
        $this->assertInternalType('string', $addressRequestModel->getLastName());
        $this->assertInternalType('string', $addressRequestModel->getCompany());
        $this->assertInternalType('string', $addressRequestModel->getaddress1());
        $this->assertInternalType('string', $addressRequestModel->getaddress2());
        $this->assertInternalType('string', $addressRequestModel->getCity());
        $this->assertInternalType('string', $addressRequestModel->getState());
        $this->assertInternalType('string', $addressRequestModel->getZipcode());
        $this->assertInternalType('string', $addressRequestModel->getExtZipCode());
        $this->assertInternalType('string', $addressRequestModel->getCountry());
        $this->assertInternalType('string', $addressRequestModel->getPhone());
    }

}
