<?php

namespace Frontend\StringKeyBundle\Entity;

use CoreSystem\MainBundle\Entity\UserLogEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * StringKey
 *
 * @ORM\Table(name="string_key")
 * @ORM\Entity(repositoryClass="Frontend\StringKeyBundle\Repository\StringKeyRepository")
 */
class StringKey extends UserLogEntity
{
    /**
     * @ORM\Column(name="key_label", type="string")
     */
    private $keyLabel;

    /**
     * @ORM\ManyToMany(targetEntity="Frontend\OperatingSystemBundle\Entity\OperatingSystem")
     * @ORM\JoinTable(name="key_os",
     *      joinColumns={@ORM\JoinColumn(name="string_key", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="os", referencedColumnName="id")}
     *      )
     */
    private $os;

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * @return mixed
     */
    public function getKeyLabel()
    {
        return $this->keyLabel;
    }

    /**
     * @param mixed $keyLabel
     */
    public function setKeyLabel($keyLabel)
    {
        $this->keyLabel = $keyLabel;
    }
    
    
}

