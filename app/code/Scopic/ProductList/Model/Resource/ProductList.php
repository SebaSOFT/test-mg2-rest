<?php

namespace Scopic\ProductList\Model\Resource;


use Magento\Framework\DataObject;
use Scopic\ProductList\Api\ProductListInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;

class ProductList implements ProductListInterface {


    /**
     * @var ProductCollectionFactory
     */
    private $_productCollection;

    public function __construct(ProductCollectionFactory $_productCollection) {
        $this->_productCollection = $_productCollection;
    }

    /**
     * @api
     * @return array
     */
    public function getProductList() {
        $prodCol = $this->_productCollection->create()->getItems();
        $res = array();

        foreach ($prodCol as $product) {
            $res[] = $product->convertToArray(['id', 'name', 'sku', 'price']);
        }

        return $res;
    }
}