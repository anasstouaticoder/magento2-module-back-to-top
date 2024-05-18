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
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private const XML_PATH_BACK_TO_TOP = 'back_to_top';
    /**
     * @var ScopeConfigInterface
     */
    protected ScopeConfigInterface $scopeConfig;
    /**
     * @var Json
     */
    protected Json $json;
    /**
     * @var array
     */
    protected array $configData = [];

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param Json $json
     */
    public function __construct(ScopeConfigInterface $scopeConfig, Json $json)
    {
        $this->json = $json;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     *  Get config value
     *
     * @param string $field
     * @param null|int $storeId
     * @return mixed
     */
    protected function getConfigValue(string $field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORES,
            $storeId
        );
    }

    /**
     * Get all config Data
     *
     * @return array
     */
    public function getConfigData(): array
    {
        if ($this->configData === []) {
            $this->configData =  $this->getConfigValue(self::XML_PATH_BACK_TO_TOP);
        }

        return $this->configData;
    }

    /**
     * Convert config data to Json object
     *
     * @return string
     */
    public function getJSONConfigData(): string
    {
        $data = $this->getConfigData();

        return $this->json->serialize($data);
    }
}
