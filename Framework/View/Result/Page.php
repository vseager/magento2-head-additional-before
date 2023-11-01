<?php

namespace Vseager\HeadAdditionalBefore\Framework\View\Result;

use Magento\Framework\App\Response\HttpInterface as HttpResponseInterface;
use Magento\Framework\View\Result\Page as MagentoPage;

class Page extends MagentoPage
{
    protected function render(HttpResponseInterface $response)
    {

        if ($this->getPageLayout()) {
            $addBlockBefore = $this->getLayout()->getBlock('head.additional.before'); // todo
            $this->assign([
                'headAdditionalBefore' => $addBlockBefore ? $addBlockBefore->toHtml() : null
            ]);
        }
        parent::render($response);

        return $this;
    }
}
