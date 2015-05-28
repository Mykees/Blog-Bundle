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
        return true;
    }
}
