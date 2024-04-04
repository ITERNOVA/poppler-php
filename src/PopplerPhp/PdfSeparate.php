<?php
/**
 * Poppler-PHP
 * Date:    10/14/2016
 * Time:    3:34 PM
 **/

namespace Iternova\PopplerPhp;

use Iternova\PopplerPhp\Constants as C;

class PdfSeparate extends PopplerUtil {
    /**
     * PdfSeparate constructor.
     *
     * @param string $pdfFile
     * @param array $options
     */
    public function __construct( $pdfFile = '', array $options = [] ) {
        $this->binFile = C::PDF_SEPARATE;

        return parent::__construct( $pdfFile, $options );
    }

    public function utilOptions() {
        // TODO: Implement utilOptions() method.
    }

    public function utilOptionRules() {
        // TODO: Implement utilOptionRules() method.
    }

    public function utilFlags() {
        // TODO: Implement utilFlags() method.
    }

    public function utilFlagRules() {
        // TODO: Implement utilFlagRules() method.
    }

    public function outputExtension() {
        return '.pdf';
    }

    /**
     * @return string
     */
    public function generate() {
        $this->outputFileExtension = $this->outputExtension();

        return $this->shellExec();
    }

}
