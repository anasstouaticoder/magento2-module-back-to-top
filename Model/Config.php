<?php
/**
 * Copyright (c) 2023
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 */
declare(strict_types=1);

namespace AnassTouatiCoder\BackToTop\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    public const XML_PATH_LABEL_COLOR = 'back_to_top/display/label_color';
    public const XML_PATH_BACKGROUND_COLOR = 'back_to_top/display/background_color';
    public const XML_PATH_BORDER_COLOR = 'back_to_top/display/border_color';
    public const XML_PATH_POSITION = 'back_to_top/display/position';
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig, )
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param $field
     * @param $storeId
     * @return mixed
     */
    protected function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORES,
            $storeId
        );
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function getLabelColor($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_LABEL_COLOR, $storeId);
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function getBackgroundColor($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_BACKGROUND_COLOR, $storeId);
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function getBorderColor($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_BORDER_COLOR, $storeId);
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function getPosition($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_POSITION, $storeId);
    }
}
