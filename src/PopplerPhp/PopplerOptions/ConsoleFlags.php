<?php
/**
 * Poppler-PHP
 * Date:    10/13/2016
 * Time:    1:08 AM
 **/

namespace Iternova\PopplerPhp\PopplerOptions;

use Iternova\PopplerPhp\Constants as C;

/**
 * Trait ConsoleFlags
 * @package Iternova\PopplerPhp\PopplerOptions
 */
trait ConsoleFlags {
    use HelpFlags;
    use VersionFlags;

    /**
     * @return array
     */
    protected function allConsoleFlags() {
        return array_merge(
            $this->consoleFlags(),
            $this->helpFlags(),
            $this->versionFlags()
        );
    }

    /**
     * @return array
     */
    protected function consoleFlags() {
        return [ C::_Q, C::_STDOUT ];
    }
}
