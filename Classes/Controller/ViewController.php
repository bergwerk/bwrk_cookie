<?php
namespace BERGWERK\BwrkCookie\Controller;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class CookieController
 * @package BERGWERK\BwrkCookie\Controller
 */
class ViewController extends ActionController
{
    public function indexAction()
    {
        $this->view->assign('settings', $this->settings);
    }
}