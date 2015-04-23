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
     * Returns the $sinceDate year and todays year separated by $separator 
     * if not the same otherwise it returns todays year
     * @param string|\DateTime $sinceDate if string assumed to be the year
     * @return string
     */
    public function __invoke($sinceDate, $separator = ' - ')
    {
        if (is_string($sinceDate)) {
            $sinceDate = \DateTime::createFromFormat('Y', $sinceDate);
        }
        if (!$sinceDate instanceof \DateTime) {
            throw new \Exception('Param must be instance of DateTime, given: ' . print_r($sinceDate, true));
        }
        $sinceYear = $sinceDate->format('Y');
        $nowDate = new \DateTime();
        $thisYear = $nowDate->format('Y');
        $since = '';
        if ($sinceYear !== $thisYear) {
            $since = $sinceYear . $separator;
        }
        return $since . $thisYear;
    }
}
