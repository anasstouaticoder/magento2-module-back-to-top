<?php
/**
 * Copyright (c) 2024
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 */
declare(strict_types=1);

namespace AnassTouatiCoder\BackToTop\Model\Config\Source;

class Page
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'cms_index_index', 'label' => __('Home')],
            ['value' => 'catalog_category_view', 'label' => __('Category')],
            ['value' => 'catalog_product_view', 'label' => __('Product')],
            ['value' => 'checkout_cart_index', 'label' => __('Carte')],
            ['value' => 'checkout_index_index', 'label' => __('Checkout')],
            ['value' => 'contact_index_index', 'label' => __('Contact')],
        ];
    }
}
