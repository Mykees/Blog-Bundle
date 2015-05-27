<?php

namespace Mvc\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mvc\BlogBundle\Util\Urlizer;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mvc\BlogBundle\Repository\PostsRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Post
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


    /**
     * @ORM\ManyToOne(targetEntity="Mvc\BlogBundle\Entity\Category", inversedBy="posts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category=null;

    /**
     * @ORM\ManyToOne(targetEntity="Mvc\BlogBundle\Entity\User")
     */
    private $user;


    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     *
     */
    public function preSave()
    {
        if($this->getCreatedAt() == null)
        {
            $this->createdAt = new \DateTime();
        }

        if($this->getSlug() == null)
        {
            $this->slug = Urlizer::urlize($this->getName());
        }
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set category
     *
     * @param \Mvc\BlogBundle\Entity\Category $category
     * @return Post
     */
    public function setCategory(\Mvc\BlogBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Mvc\BlogBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set user
     *
     * @param \Mvc\BlogBundle\Entity\User $user
     * @return Post
     */
    public function setUser(\Mvc\BlogBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Mvc\BlogBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

}
