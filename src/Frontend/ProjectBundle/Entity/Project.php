<?php

namespace Frontend\ProjectBundle\Entity;

use CoreSystem\MainBundle\Entity\UserLogEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Frontend\LangBundle\Entity\Lang;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="Frontend\ProjectBundle\Repository\ProjectRepository")
 */
class Project extends UserLogEntity
{
    public function __construct()
    {
        $this->lang = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Frontend\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(type="string")
     */
    private $projectName;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Frontend\LangBundle\Entity\Lang")
     * @ORM\JoinTable(name="project_lang",
     *      joinColumns={@ORM\JoinColumn(name="project", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="lang", referencedColumnName="id")}
     *      )
     */
    private $lang;

    /**
     * @return mixed
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param mixed $projectName
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang(Lang $lang)
    {
        $this->lang[] = $lang;
    }
}

