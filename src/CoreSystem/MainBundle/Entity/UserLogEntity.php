<?php

namespace CoreSystem\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MainEntity
 */
class UserLogEntity extends TimestampEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="Frontend\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="created_user", referencedColumnName="id")
     */
    protected $createdUser;

    /**
     * @ORM\ManyToOne(targetEntity="Frontend\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="modified_user", referencedColumnName="id")
     */
    protected $modifiedUser;

    /**
     * @return mixed
     */
    public function getCreatedUser()
    {
        return $this->createdUser;
    }

    /**
     * @param mixed $createdUser
     */
    public function setCreatedUser($createdUser)
    {
        $this->createdUser = $createdUser;
    }

    /**
     * @return mixed
     */
    public function getModifiedUser()
    {
        return $this->modifiedUser;
    }

    /**
     * @param mixed $modifiedUser
     */
    public function setModifiedUser($modifiedUser)
    {
        $this->modifiedUser = $modifiedUser;
    }
}

