<?php
/**
 * Copyright (c) 2023
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 */
declare(strict_types=1);

namespace AnassTouatiCoder\BackToTop\Model\Config\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'top-left', 'label' => __('Top - Left')],
            ['value' => 'top-right', 'label' => __('Top - Right')],
            ['value' => 'bottom-left', 'label' => __('Bottom - Left')],
            ['value' => 'bottom-right', 'label' => __('Bottom - Right')],
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'top-left' => __('Top - Left'),
            'top-right' => __('Top - Right'),
            'bottom-left' => __('Bottom - Left'),
            'bottom-right' => __('Bottom - Right'),
        ];
    }
}
