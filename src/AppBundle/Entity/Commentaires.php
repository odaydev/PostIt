<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post", inversedBy="commentaires")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id") 
     */ 
    private $post;

    /**
     * @var Users
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="commentaires")
     * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */     
    private $users;

    /**
     * @var Like
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Like", inversedBy="commentaires")
     * @ORM\JoinColumn(name="like_id", referencedColumnName="id")
     */     
    private $like;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_commentaire", type="string", length=255)
     */
    private $texteCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set post
     *
     *
     */
    public function setPost(Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     */
    public function getPost()
    {
        return $this->post;
    }

    
    /**
     * Set texteCommentaire
     *
     * @param string $texteCommentaire
     *
     * @return Commentaires
     */
    public function setTexteCommentaire($texteCommentaire)
    {
        $this->texteCommentaire = $texteCommentaire;

        return $this;
    }

    /**
     * Get texteCommentaire
     *
     * @return string
     */
    public function getTexteCommentaire()
    {
        return $this->texteCommentaire;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Commentaires
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set users
     *
     * @param \AppBundle\Entity\Users $users
     *
     * @return Commentaires
     */
    public function setUsers(\AppBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set like
     *
     * @param string $like
     *
     * @return Commentaires
     */
    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get like
     *
     * @return string
     */
    public function getLike()
    {
        return $this->like;
    }
}
