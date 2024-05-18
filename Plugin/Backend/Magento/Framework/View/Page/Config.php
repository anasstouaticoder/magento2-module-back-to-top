<?php
/**
 * Copyright (c) 2023
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 */
declare(strict_types=1);

namespace AnassTouatiCoder\BackToTop\Plugin\Backend\Magento\Framework\View\Page;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Asset\Repository;
use Magento\Framework\View\Page\Config as MagentoConfig;

class Config
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var Repository
     */
    private $assetRepository;

    /**
     * Construct
     *
     * @param RequestInterface $request
     * @param Repository $assetRepository
     */
    public function __construct(RequestInterface $request, Repository $assetRepository)
    {
        $this->request = $request;
        $this->assetRepository = $assetRepository;
    }

    /**
     * Add page Asset plugin after
     *
     * @param MagentoConfig $subject
     * @param MagentoConfig $result
     * @return MagentoConfig
     */
    public function afterAddPageAsset(
        MagentoConfig $subject,
        $result
    ) {
        return $result;
    }

    /**
     * Add colorPicker css asset to Back to top section only
     *
     * @param MagentoConfig $subject
     * @param array|string $result
     * @return mixed|void
     * @throws LocalizedException
     */
    public function afterGetIncludes(MagentoConfig $subject, $result)
    {
        $section = $this->request->getParam('section');
        $actionFullName = $this->request->getFullActionName();

        if ($section === 'back_to_top' && $actionFullName === 'adminhtml_system_config_edit') {
            $cssFile = $this->assetRepository->createAsset('jquery/colorpicker/css/colorpicker.css');
            $cssUrl = $cssFile->getUrl();
            $css = sprintf('<link rel="stylesheet" type="text/css" media="all" href="%s" />', $cssUrl);
            $result .= $css;
        }

        return $result;
    }
}
