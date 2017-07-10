<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VotesRepository")
 */
class Votes
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
     * @var int
     *
     * @ORM\Column(name="ref_id", type="integer")
     */
    private $refId;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    // /**
    //  * @ORM\OneToOne(targetEntity="AppBundle\Entity\Users", cascade={"persist"})
    //  * @ORM\JoinColumn(nullable=false)
    //  */
    // private $user;

    // /**
    //  * @ORM\OneToOne(targetEntity="AppBundle\Entity\Post", cascade={"persist"})
    //  * @ORM\JoinColumn(nullable=false)
    //  */
    // private $post;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


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
     * Set refId
     *
     * @param integer $refId
     *
     * @return Votes
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;

        return $this;
    }

    /**
     * Get refId
     *
     * @return int
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Votes
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set user
     *
     */
    public function setUser(Users $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return Votes
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Votes
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
}

