<?php

namespace tests\KoleImports\DropshipApi\Model\Request\AddressTest;

use KoleImports\DropshipApi\Model\Request\Item;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    public function testVaildItem()
    {
        $itemRequestModel = new Item();

        $itemRequestModel->setSku('AB244');
        $itemRequestModel->setQuantity('100');

        $this->assertInternalType('string', $itemRequestModel->getSku());
        $this->assertInternalType('integer', $itemRequestModel->getQuantity());
    }
}
