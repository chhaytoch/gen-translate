<?php

namespace Frontend\StringKeyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StringKey
 *
 * @ORM\Table(name="string_key")
 * @ORM\Entity(repositoryClass="Frontend\StringKeyBundle\Repository\StringKeyRepository")
 */
class StringKey
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

