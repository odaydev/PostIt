<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=191)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="title_post", type="string", length=191)
     */
    private $titlePost;

    /**
     * @var string
     *
     * @ORM\Column(name="image_post", type="string", length=191)
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png" })
     *
     */     
    private $imagePost;

    /**
     * @var text
     *
     * @ORM\Column(name="texte_post", type="text")
     */
    private $textePost;

    /**
      * @var Users
      * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users", inversedBy="post")
      * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */
    private $users;

    
    /**
     * @var Commentaires
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaires", cascade={"persist"}, mappedBy="post", fetch="EAGER")
     */
    private $commentaires;

    /**
     * @var datetime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=191)
     */
    private $keywords;

    /**
     * @var int
     *
     * @ORM\Column(name="like_post", type="integer")
     */
    private $likePost;

    
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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Post
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set titlePost
     *
     * @param string $titlePost
     *
     * @return Post
     */
    public function setTitlePost($titlePost)
    {
        $this->titlePost = $titlePost;

        return $this;
    }

    /**
     * Get titlePost
     *
     * @return string
     */
    public function getTitlePost()
    {
        return $this->titlePost;
    }

    /**
     * Set imagePost
     *
     * @param string $imagePost
     *
     * @return Post
     */
    public function setImagePost($imagePost)
    {
        $this->imagePost = $imagePost;

        return $this;
    }

    /**
     * Get imagePost
     *
     * @return string
     */
    public function getImagePost()
    {
        return $this->imagePost;
    }

    /**
     * Set textePost
     *
     * @param text $textePost
     *
     * @return Post
     */
    public function setTextePost($textePost)
    {
        $this->textePost = $textePost;

        return $this;
    }

    /**
     * Get textePost
     *
     * @return text
     */
    public function getTextePost()
    {
        return $this->textePost;
    }

    /**
     * Set user
     */
    public function setUsers(Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get user
     *
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set created
     *
     * @param datetime $created
     *
     * @return Post
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Post
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set likePost
     *
     * @param integer $likePost
     *
     * @return Post
     */
    public function setLikePost($likePost)
    {
        $this->likePost = $likePost;

        return $this;
    }

    /**
     * Get likePost
     *
     * @return int
     */
    public function getLikePost()
    {
        return $this->likePost;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaires $commentaire
     *
     * @return Post
     */
    public function addCommentaire(\AppBundle\Entity\Commentaires $commentaire)
    {
        $this->commentaires[] = $commentaire;
        // $commentaires->setPost($this);

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \AppBundle\Entity\Commentaires $commentaire
     */
    public function removeCommentaire(\AppBundle\Entity\Commentaires $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
