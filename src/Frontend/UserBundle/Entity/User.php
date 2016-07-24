<?php

namespace Frontend\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="intenal_user")
 * @ORM\Entity(repositoryClass="Frontend\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id = null;

    public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_USER');
    }

    /**
     * @ORM\Column(type="integer", options={"defaults":"1"})
     */
    private $status = 1;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}

