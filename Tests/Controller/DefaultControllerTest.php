<?php

namespace Mykees\MediaBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultControllerTest extends WebTestCase
{
    protected $client;
    protected $container;
    protected $manager;

    public function setUp()
    {
        //Load fixtures
        $fixtures = array(
            'Mykees\MediaBundle\DataFixtures\ORM\LoadMedias',
            'Mvc\BlogBundle\DataFixtures\ORM\LoadPostsData',
        );
        $this->loadFixtures($fixtures);

        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
        $this->manager = $this->container->get('mk.media.manager');
        $image = $this->client->getKernel()->getRootDir().'/../web/img/';

        parent::setUp();
    }

    public function testListMedias()
    {
        $crawler = $this->client->request('GET', '/admin/medias/Post/MvcBlogBundle/1');
        $this->assertEquals(200,$this->client->getResponse()->getStatusCode());
        $this->assertEquals(2,$crawler->filter('.count-tr')->count());


        $crawler = $this->client->request('GET', '/admin/medias/Post/MvcBlogBundle/2');
        $this->assertEquals(200,$this->client->getResponse()->getStatusCode());
        $this->assertEquals(1,$crawler->filter('.count-tr')->count());
    }

    public function testFindAllMediasForAModel()
    {
        $medias  = $this->manager->findMediasByModelAndId('Post',1);
        $this->assertGreaterThan(1,count($medias));
        $this->assertEquals(2, count($medias));
    }

    public function testRemoveFile()
    {
        $this->client->request('GET', '/admin/medias/delete/Post/MvcBlogBundle/9');
        $this->assertEquals(200,$this->client->getResponse()->getStatusCode());

        $medias  = $this->manager->findMediasByModelAndId('Post',2);
        $this->assertEquals(0, count($medias));
    }
}
