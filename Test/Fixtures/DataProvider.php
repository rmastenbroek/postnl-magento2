<?php
/**
 *
 *          ..::..
 *     ..::::::::::::..
 *   ::'''''':''::'''''::
 *   ::..  ..:  :  ....::
 *   ::::  :::  :  :   ::
 *   ::::  :::  :  ''' ::
 *   ::::..:::..::.....::
 *     ''::::::::::::''
 *          ''::''
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Creative Commons License.
 * It is available through the world-wide-web at this URL:
 * http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to servicedesk@tig.nl so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please contact servicedesk@tig.nl for more information.
 *
 * @copyright   Copyright (c) Total Internet Group B.V. https://tig.nl/copyright
 * @license     http://creativecommons.org/licenses/by-nc-nd/3.0/nl/deed.en_US
 */
namespace TIG\PostNL\Test\Fixtures;

class DataProvider
{
    /**
     * @return \Generator
     */
    public function randomWordsProvider()
    {
        for ($i = 0; $i <= 3; $i++) {
            yield [uniqid()];
        }
    }

    /**
     * @return array
     */
    public function enabledAndDisabled()
    {
        return [
            [true],
            [false],
        ];
    }

    /**
     * @return string
     */
    public function liveStagingProvider()
    {
        return [
            ['0', 'off'],
            ['1', 'live'],
            ['2', 'staging'],
        ];
    }

    /**
     * @return array
     */
    public function pdfLabelPaths()
    {
        return [
            [
                'separate_pdfs' => [
                    __DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-1.pdf',
                    __DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-2.pdf'
                ]
            ],
            [
                'separate_pdfs' => [
                    __DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-1.pdf'
                ]
            ],
        ];
    }

    /**
     * @return array
     */
    public function pdfLabelFiles()
    {
        return [
            [
                'separate_pdfs' => [
                    base64_encode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-1.pdf')),
                    base64_encode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-2.pdf'))
                ]
            ],
            [
                'separate_pdfs' => [
                    base64_encode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'shippinglabel-1.pdf'))
                ]
            ],
        ];
    }
}
