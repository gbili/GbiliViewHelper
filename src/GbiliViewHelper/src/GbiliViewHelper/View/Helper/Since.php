<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace GbiliViewHelper\View\Helper;

/**
 * View helper for translating messages.
 */
class Since extends \Zend\View\Helper\AbstractHelper
{
    /**
     * Translate a message
     * @return string
     */
    public function __invoke($year)
    {
        $thisYear = date('Y');
        $thisYearInt = strtotime($thisYear);
        $yearInt = strtotime($year);

        $oneYearInt = strtotime('+1 year');

        $since = '';
        if ($thisYearInt - $oneYearInt < $yearInt) {
            $since = date('Y', $yearInt) . ' - ';
        }
        return $since . $thisYear;
    }
}
