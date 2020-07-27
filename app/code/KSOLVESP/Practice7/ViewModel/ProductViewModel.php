<?php
namespace KSOLVESP\Practice7\ViewModel;

class ProductViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private $resource;

    public function __construct(Resource $resource)
    {
        $this->resource = $resource;
    }

    public function getProductBySku(string $sku): ProductInterface
    {
         return $this->resource->load($sku, ‘sku’);
    }
}