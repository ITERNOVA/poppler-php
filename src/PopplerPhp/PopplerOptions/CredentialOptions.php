<?php
/**
 * Poppler-PHP
 * Date:    10/12/2016
 * Time:    5:29 PM
 **/

namespace Iternova\PopplerPhp\PopplerOptions;

use Iternova\PopplerPhp\Constants as C;

/**
 * Trait CredentialOptions
 * @package Iternova\PopplerPhp\PopplerOptions
 */
trait CredentialOptions {
    /**
     * @param $pswd
     *
     * @return mixed
     */
    public function setOwnerPassword( $pswd ) {
        return $this->setOption( C::_OPW, $pswd );
    }

    /**
     * @return mixed
     */
    public function unsetOwnerPassword() {
        return $this->unsetOption( C::_OPW );
    }

    /**
     * @param $pswd
     *
     * @return mixed
     */
    public function setUserPassword( $pswd ) {
        return $this->setOption( C::_UPW, $pswd );
    }

    /**
     * @return mixed
     */
    public function unsetUserPassword() {
        return $this->unsetOption( C::_UPW );
    }

    /**
     * @return array
     */
    protected function credentialOptions() {
        return [
            C::_OPW => C::T_STRING,
            C::_UPW => C::T_STRING,
        ];
    }

}
