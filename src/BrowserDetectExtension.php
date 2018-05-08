<?php

namespace Bolt\Extension\EyeLogic\BrowserDetect;

use Bolt\Extension\SimpleExtension;

/**
 * BrowserDetect extension class.
 *
 * @author Eye Logic B.V. <info@eyelogic.nl>
 */
class BrowserDetectExtension extends SimpleExtension {

    protected function registerTwigFunctions()
    {
        return [
            'isUsingInternetExplorer'    => 'isUsingInternetExplorer',
        ];
    }

    public function isUsingInternetExplorer() {
        $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
        if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0; rv:11.0') !== false)) {
            return true;
        }
        return false;
    }
}
