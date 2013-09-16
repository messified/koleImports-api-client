<?php

namespace tests\KoleImports\DropshipApi\Model\Request\AddressTest;

use KoleImports\DropshipApi\Model\Request\ItemCollection;

class ItemCollectionTest extends \PHPUnit_Framework_TestCase
{

    public function testValidItemCollection()
    {
        $itemCollectionModel = new ItemCollection();

        $itemCollectionModel->setItems(array('sku' => 'AB123', 'quantity' => '10'));

        $this->assertInternalType('array', $itemCollectionModel->getItems());
    }
}
