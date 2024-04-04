<?php
/**
 * Poppler-PHP
 * Date:    10/12/2016
 * Time:    5:50 PM
 **/

namespace Iternova\PopplerPhp\PopplerOptions;

use Iternova\PopplerPhp\Constants as C;

/**
 * Trait VersionFlags
 * @package Iternova\PopplerPhp\PopplerOptions
 */
trait VersionFlags {
    /**
     * @return mixed
     */
    public function printVersionInfo() {
        return $this->setFlag( C::_V );
    }

    /**
     * @return array
     */
    protected function versionFlags() {
        return [ C::_V ];
    }
}
