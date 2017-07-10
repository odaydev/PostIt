<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="like")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LikeRepository")
 */
class Like 
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
     * @var Commentaires
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaires", mappedBy="like", fetch="EAGER")
     */
    private $commentaires;

    /**
      * @var Users
      * @ORM\OnetoMany(targetEntity="AppBundle\Entity\Users", mappedBy="like", fetch="EAGER")
      */ 
    private $users;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaires $commentaire
     *
     * @return Like
     */
    public function addCommentaire(\AppBundle\Entity\Commentaires $commentaire)
    {
        $this->commentaires[] = $commentaire;

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

    /**
     * Add user
     *
     * @param \AppBundle\Entity\Users $user
     *
     * @return Like
     */
    public function addUser(\AppBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\Users $user
     */
    public function removeUser(\AppBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
