<?php

/**
 * Logoff process.
 */
declare(strict_types=1);

namespace SFC\Staticfilecache\Hook;

use SFC\Staticfilecache\Service\CookieService;
use TYPO3\CMS\Core\Authentication\AbstractUserAuthentication;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * LogoffFrontendUser.
 */
class LogoffFrontendUser extends AbstractHook
{
    /**
     * Logoff process.
     *
     * @param array                      $parameters
     * @param AbstractUserAuthentication $parentObject
     */
    public function logoff($parameters, AbstractUserAuthentication $parentObject)
    {
        if ('FE' !== $parentObject->loginType) {
            return;
        }
        GeneralUtility::makeInstance(CookieService::class)->setCookie(1);
    }
}
