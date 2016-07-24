<?php

namespace Frontend\TranslateStringBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TranslateString
 *
 * @ORM\Table(name="translate_string")
 * @ORM\Entity(repositoryClass="Frontend\TranslateStringBundle\Repository\TranslateStringRepository")
 */
class TranslateString
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

