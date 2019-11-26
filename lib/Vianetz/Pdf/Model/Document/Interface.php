<?php
/**
 * Pdf document interface class
 *
 * @section LICENSE
 * This file is created by vianetz <info@vianetz.com>.
 * The Magento module is distributed under a commercial license.
 * Any redistribution, copy or direct modification is explicitly not allowed.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@vianetz.com so we can send you a copy immediately.
 *
 * @category    Vianetz
 * @package     Vianetz_Pdf
 * @author      Christoph Massmann, <C.Massmann@vianetz.com>
 * @link        http://www.vianetz.com
 * @copyright   Copyright (c) 2006-17 vianetz - C. Massmann (http://www.vianetz.com)
 * @license     http://www.vianetz.com/license Commercial Software License
 * @version     2.5.3
 */

/**
 * Interface Vianetz_Pdf_Model_Document_Interface
 */
interface Vianetz_Pdf_Model_Document_Interface
{
    /**
     * Return HTML file contents for conversion to PDF.
     *
     * @return string
     */
    public function getHtmlContents();

    /**
     * Return store id for current document (will be used e.g. for store emulation).
     *
     * @return integer
     */
    public function getStoreId();

    /**
     * @return string
     */
    public function getPdfBackgroundFile();

    /**
     * @return string
     */
    public function getPdfBackgroundFileForFirstPage();

    /**
     * @return string
     */
    public function getPdfAttachmentFile();

    /**
     * @return string
     */
    public function getDocumentType();
}
