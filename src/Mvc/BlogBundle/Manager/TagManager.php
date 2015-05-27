<?php
/**
 * Created by PhpStorm.
 * User: Rafidion Michael
 * Date: 31/03/2015
 * Time: 00:46
 */

namespace Mvc\BlogBundle\Manager;


use Doctrine\ORM\EntityManager;
use Mvc\BlogBundle\Interfaces\TagInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TagManager {

    public $em;
    public $container;

    public function __construct(ContainerInterface $container, EntityManager $em)
    {
        $this->em = $em;
        $this->container = $container;
    }



    public function save(TagInterface $entity)
    {
        var_dump($entity);
        die();
    }

    public function createForm($formType,TagInterface $model,$options=array())
    {
        return $this->container->get('form.factory')->create(
            $formType,
            $model,
            $options
        );
//        return $this->container->get('form.factory')->create(
//            new TagRelationType(),
//            null,
//            [
//                'TagAssociateType' => $formType,
//                'TagAssociable'     => $model,
//                'em'                  => $this->em,
//            ]
//        );
    }

}