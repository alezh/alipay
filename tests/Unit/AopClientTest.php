<?php

use PHPUnit\Framework\TestCase;

/**
 * Test AopClient class
 */
class AopClientTest extends TestCase
{
    /** @var object aopclient对象 */
    private $aopclient;

    public function setup()
    {
        $this->aopclient = new \Losgif\Alipay\AopClient();
    }

    public function testAopClient()
    {
        return true;
    }

}
