<?php
/**
 * Poppler-PHP
 * Date:    10/14/2016
 * Time:    3:36 PM
 **/

namespace Iternova\PopplerPhp;

use Iternova\PopplerPhp\Constants as C;
use Iternova\PopplerPhp\PopplerOptions\ConsoleFlags;
use Iternova\PopplerPhp\PopplerOptions\CredentialOptions;
use Iternova\PopplerPhp\PopplerOptions\EncodingOptions;
use Iternova\PopplerPhp\PopplerOptions\HtmlOptions;
use Iternova\PopplerPhp\PopplerOptions\PageRangeOptions;
use Iternova\PopplerPhp\PopplerOptions\TextFlags;

/**
 * Class PdfToText
 * @package Iternova\PopplerPhp
 */
class PdfToText extends PopplerUtil {
    use PageRangeOptions;
    use ConsoleFlags;
    use HtmlOptions;
    use EncodingOptions;
    use CredentialOptions;
    use TextFlags;

    /**
     * PdfToCairo constructor.
     *
     * @param string $pdfFile
     * @param array $options
     *
     * @throws Exceptions\PopplerPhpException
     */
    public function __construct( $pdfFile = '', array $options = [] ) {
        $this->binFile = C::PDF_TO_TEXT;

        return parent::__construct( $pdfFile, $options );
    }

    /**
     * @return array|mixed
     */
    public function utilOptions() {
        return array_merge(
            $this->pageRangeOptions(),
            $this->htmlOptions(),
            $this->credentialOptions(),
            $this->encodingOptions()
        );
    }

    /**
     * @return array|mixed
     */
    public function utilOptionRules() {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return array|mixed
     */
    public function utilFlags() {
        return $this->textFlags();
    }

    /**
     * @return array|mixed
     */
    public function utilFlagRules() {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return mixed|string
     */
    public function outputExtension() {
        return '.txt';
    }

    /**
     * @return string
     */
    public function generate() {
        $this->outputFileExtension = $this->outputExtension();

        return $this->shellExec();
    }

    /**
     * @param $page
     *
     * @return PdfToText
     * @throws Exceptions\PopplerPhpException
     */
    public function startFromPage( $page ) {
        return $this->setOption( C::_F, $page );
    }

    /**
     * @param $page
     *
     * @return PdfToText
     * @throws Exceptions\PopplerPhpException
     */
    public function stopAtPage( $page ) {
        return $this->setOption( C::_L, $page );
    }

    /**
     * @return array
     */
    protected function pageRangeOptions() {
        return [
            C::_F => C::T_INTEGER,
            C::_L => C::T_INTEGER,
        ];
    }
}
