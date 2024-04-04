<?php
/**
 * Poppler-PHP
 * Date:    10/12/2016
 * Time:    6:37 PM
 **/

namespace Iternova\PopplerPhp\PopplerOptions;

use Iternova\PopplerPhp\Constants as C;

/**
 * Trait DateFlags
 * @package Iternova\PopplerPhp\PopplerOptions
 */
trait DateFlags {
    /**
     * @return mixed
     */
    public function isoDates() {
        return $this->setFlag( C::_ISODATES );
    }

    /**
     * @return mixed
     */
    public function rawDates() {
        return $this->setFlag( C::_RAWDATE );
    }

    /**
     * @return mixed
     */
    public function defaultDates() {
        $this->unsetFlag( C::_RAWDATE );

        return $this->unsetFlag( C::_ISODATES );
    }

    /**
     * @return array
     */
    protected function dateFlags() {
        return [ C::_ISODATES, C::_RAWDATE ];
    }
}
