<?php

namespace BERGWERK\BwrkCookie\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class AbstractController
 * @package BERGWERK\BwrkCookie\Controller
 */
class AbstractController extends ActionController
{
    protected $contentObject;

    protected function initializeAction()
    {
        $this->contentObject = $this->configurationManager->getContentObject();
    }
}