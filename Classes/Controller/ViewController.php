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
        $showCookieNotice = true;
        if((bool)$_COOKIE['bwrk_cookie']) $showCookieNotice = false;

        $this->view->assignMultiple(array(
            'settings' => $this->settings,
            'showCookieNotice' => $showCookieNotice
        ));
    }
}