<?php
/**
 * PriceReceiptsV3Test
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OTTO Market API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Otto\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * PriceReceiptsV3Test Class Doc Comment
 *
 * @category    Class
 * @description Costs of an object There are different definitions of Price objects in Receipt structure:   * **unitPrice** - Original price for quantity a line item object   * **positionSum** - Price for quantity x unitPrice of a line item object minus reductions of all sub priceModification objects, if exist   * **partialRefundAmount** - Granted reduction by the partner on line item object   * **priceModificationAmount** - Total reduction for the super ordinated line item object. If the line item object has a quantity, this is already been taken into account in this amount.   * **priceToPay** - Price for quantity one minus all instant reductions like partner discount ... when selling (excl. earlier partial refunds).&lt;/br&gt;Only available on receipts of receiptType PURCHASE.
 * @package     OpenAPI\Client\Otto
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PriceReceiptsV3Test extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "PriceReceiptsV3"
     */
    public function testPriceReceiptsV3()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "taxType"
     */
    public function testPropertyTaxType()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "taxRate"
     */
    public function testPropertyTaxRate()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "gross"
     */
    public function testPropertyGross()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "net"
     */
    public function testPropertyNet()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tax"
     */
    public function testPropertyTax()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
