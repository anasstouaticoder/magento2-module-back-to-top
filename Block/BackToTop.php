<?php
/**
 * Copyright (c) 2024
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 */
declare(strict_types=1);

namespace AnassTouatiCoder\BackToTop\Block;

use AnassTouatiCoder\BackToTop\Model\Config;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class BackToTop extends Template
{
    /**
     * @var Config
     */
    protected Config $config;

    /**
     * Construct
     *
     * @param Context $context
     * @param Config $config
     * @param array $data
     */
    public function __construct(Template\Context $context, Config $config, array $data = [])
    {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * Get Config Data
     *
     * @return string
     */
    public function getConfigData(): string
    {
        return $this->config->getJSONConfigData();
    }

    /**
     * Check if the back to top widget is allowed in the current page
     *
     * @return bool
     */
    public function getIsEnabledInPage(): bool
    {
        $configData = $this->config->getConfigData();
        $isEnabled = false;
        if ($configData['pages']['enabled']) {

            return true;
        }
        $pageActionList = explode(',', $configData['pages']['include_page'] ?? '');
        if (in_array($this->_request->getFullActionName(), $pageActionList)) {
            $isEnabled = true;
        }

        return $isEnabled;
    }
}
