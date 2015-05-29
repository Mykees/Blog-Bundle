<?php

namespace Mvc\BlogBundle\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Mvc\BlogBundle\Entity\Comment;
use Mvc\BlogBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{

    public function em()
    {
        return $this->getDoctrine()->getManager();
    }

    public function save($data)
    {
        $this->em()->persist($data);
        $this->em()->flush();
    }

    public function indexAction(Request $request)
    {
        return $this->getPosts($request);
    }

    public function showAction(Request $request, $slug, $id)
    {
        $post = $this->getDoctrine()->getManager()->getRepository('MvcBlogBundle:Post')->findById($id);
        $commentForm = $this->get('mykees.comment.manager')->createForm($post);
        $comments = $this->get('mykees.comment.manager')->findComments($post);

        return $this->render('MvcBlogBundle:Blog:show.html.twig',['post'=>$post,'form'=>$commentForm,'comments'=>$comments]);
    }

    public function getPostByCategoryAction($slug,Request $request)
    {
        return $this->getPosts($request,array('c.slug'=>$slug));
    }


    public function sidebarAction()
    {
        $categories = $this->getDoctrine()->getManager()->getRepository('MvcBlogBundle:Category')->findAllWithCount();
        $posts = $this->getDoctrine()->getManager()->getRepository('MvcBlogBundle:Post')->findLast();

        return $this->render('MvcBlogBundle::elements/sidebar.html.twig',['posts'=>$posts,'categories'=>$categories]);
    }


    public function getPosts(Request $request,$conditions=array())
    {
        $p = $this->getDoctrine()->getManager()->getRepository('MvcBlogBundle:Post')->findAllQuery($conditions);
        $posts = $this->paginate($request, $p);

        return $this->render('MvcBlogBundle:Blog:index.html.twig',['posts'=>$posts]);
    }


    protected function paginate(Request $request, $query, $limit = 5){
        $page = (int) $request->get('page') ?: 1;
        $query
            ->setFirstResult(($page-1) * $limit)
            ->setMaxResults($limit)
        ;
        return new Paginator($query, true);
    }
}
