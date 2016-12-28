<?php

namespace DisplayBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        /** Assert the response is 200 */
        $this->assertTrue($client->getResponse()->isSuccessful(), 'The response of index was not successful' );

        /** Assert that the #app is on the page */
        $this->assertCount(1, $crawler->filter('div#app'), 'The #app was not found');
    }


}
