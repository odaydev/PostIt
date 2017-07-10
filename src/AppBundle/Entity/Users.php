<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 */
class Users implements AdvancedUserInterface /*\Serializable*/ 
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
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=191, unique=true)
     */
    private $username;

     /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=191, unique=true)
     */
    private $email;

     /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=191)
     */
    private $photo;

     /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255)
     */
    private $presentation;

     /**
     * @var datetime
     *
     * @ORM\Column(name="inscription", type="datetime")
     */
    private $inscription;

     /**
     * @var date
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

     /**
     * @var datetime
     *
     * @ORM\Column(name="last_connexion", type="datetime")
     */
    private $last_connexion;
     
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(name="is_account_non_expired", type="boolean")
     */
    private $isAccountNonExpired;

    /**
     * @ORM\Column(name="is_account_non_locked", type="boolean")
     */
    private $isAccountNonLocked;

    /**
     * @ORM\Column(name="is_credentials_non_expired", type="boolean")
     */
    private $isCredentialsNonExpired;

    /**
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var Commentaires
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Commentaires", mappedBy="users", fetch="EAGER")
     */
    private $commentaires;

    /**
      * @var Post
      * @ORM\OnetoMany(targetEntity="AppBundle\Entity\Post", mappedBy="users", fetch="EAGER")
      */ 
    private $post; 

    /**
     * @var Like
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Like", inversedBy="users")
     * @ORM\JoinColumn(name="like_id", referencedColumnName="id")
     */     
    private $like;

    public function __construct()
    {
        $this->roles = array('ROLE_USER');
        $this->inscription = new \DateTime();
        $this->lastConnexion = new \DateTime();
        $this->isActive = true;
        $this->isAccountNonExpired = true;
        $this->isAccountNonLocked = true;
        $this->isCredentialsNonExpired = true;
        $this->isEnabled = true;
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salt = md5(uniqid());
    }

    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Returns the roles granted to the user.
     * 
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {
    }

     public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        
        $data = array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
            $this->isAccountNonExpired,
            $this->isAccountNonLocked,
            $this->isCredentialsNonExpired,
            $this->isEnabled,
            $this->roles,
            // $this->salt
        );


        return serialize($data);
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        // $serialized = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $serialized);
   var_dump(unserialize($serialized));
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
            $this->isAccountNonExpired,
            $this->isAccountNonLocked,
            $this->isCredentialsNonExpired,
            $this->isEnabled,
            $this->roles,
            // $this->salt
        ) = unserialize($serialized);
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
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
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Users
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set inscription
     *
     * @param \DateTime $inscription
     *
     * @return Users
     */
    public function setInscription($inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \DateTime
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set lastConnexion
     *
     * @param \DateTime $lastConnexion
     *
     * @return Users
     */
    public function setLastConnexion($lastConnexion)
    {
        $this->last_connexion = $lastConnexion;

        return $this;
    }

    /**
     * Get lastConnexion
     *
     * @return \DateTime
     */
    public function getLastConnexion()
    {
        return $this->last_connexion;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Users
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set createdTs
     *
     * @param integer $createdTs
     *
     * @return Users
     */
    public function setCreatedTs($createdTs)
    {
        $this->created_ts = $createdTs;

        return $this;
    }

    /**
     * Get createdTs
     *
     * @return integer
     */
    public function getCreatedTs()
    {
        return $this->created_ts;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Users
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isAccountNonExpired
     *
     * @param boolean $isAccountNonExpired
     *
     * @return Users
     */
    public function setIsAccountNonExpired($isAccountNonExpired)
    {
        $this->isAccountNonExpired = $isAccountNonExpired;

        return $this;
    }

    /**
     * Get isAccountNonExpired
     *
     * @return boolean
     */
    public function getIsAccountNonExpired()
    {
        return $this->isAccountNonExpired;
    }

    /**
     * Set isAccountNonLocked
     *
     * @param boolean $isAccountNonLocked
     *
     * @return Users
     */
    public function setIsAccountNonLocked($isAccountNonLocked)
    {
        $this->isAccountNonLocked = $isAccountNonLocked;

        return $this;
    }

    /**
     * Get isAccountNonLocked
     *
     * @return boolean
     */
    public function getIsAccountNonLocked()
    {
        return $this->isAccountNonLocked;
    }

    /**
     * Set isCredentialsNonExpired
     *
     * @param boolean $isCredentialsNonExpired
     *
     * @return Users
     */
    public function setIsCredentialsNonExpired($isCredentialsNonExpired)
    {
        $this->isCredentialsNonExpired = $isCredentialsNonExpired;

        return $this;
    }

    /**
     * Get isCredentialsNonExpired
     *
     * @return boolean
     */
    public function getIsCredentialsNonExpired()
    {
        return $this->isCredentialsNonExpired;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Users
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Users
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        // return $salt;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return Users
     */
    public function addPost(\AppBundle\Entity\Post $post)
    {
        $this->post[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Post $post
     */
    public function removePost(\AppBundle\Entity\Post $post)
    {
        $this->post->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Add commentaire
     *
     * @param \AppBundle\Entity\Commentaires $commentaire
     *
     * @return Users
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
}
