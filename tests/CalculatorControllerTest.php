<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $client->request('GET', '/add/2/3');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 5}', $client->getResponse()->getContent());
    }

    public function testSubtract()
    {
        $client = static::createClient();

        $client->request('GET', '/subtract/5/2');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 3}', $client->getResponse()->getContent());
    }

    public function testMultiply()
    {
        $client = static::createClient();

        $client->request('GET', '/multiply/3/4');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 12}', $client->getResponse()->getContent());
    }

    public function testDivide()
    {
        $client = static::createClient();

        $client->request('GET', '/divide/10/2');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 5}', $client->getResponse()->getContent());

        $client->request('GET', '/divide/10/0');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": "Error"}', $client->getResponse()->getContent());
    }

    public function testExponent()
    {
        $client = static::createClient();

        $client->request('GET', '/exponent/2/3');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 8}', $client->getResponse()->getContent());
    }

    public function testPercentage()
    {
        $client = static::createClient();

        $client->request('GET', '/percentage/10/20');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": 2}', $client->getResponse()->getContent());

        $client->request('GET', '/percentage/10/0');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString('{"result": "Error"}', $client->getResponse()->getContent());
    }
}
