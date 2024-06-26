<?php

namespace Iternova\PopplerPhp\PopplerOptions;

use Iternova\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package Iternova\PopplerPhp\PopplerOptions
 */
trait InfoFlags {
    /**
     * @return mixed
     */
    public function setBox() {
        return $this->setFlag( C::_BOX );
    }

    /**
     * @return array
     */
    protected function infoFlags() {
        return [ C::_BOX ];
    }
}
