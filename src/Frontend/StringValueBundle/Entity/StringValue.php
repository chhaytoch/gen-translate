<?php

namespace Frontend\StringValueBundle\Entity;

use CoreSystem\MainBundle\Entity\UserLogEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * StringValue
 *
 * @ORM\Table(name="string_value")
 * @ORM\Entity(repositoryClass="Frontend\StringValueBundle\Repository\StringValueRepository")
 */
class StringValue extends UserLogEntity
{

    /**
     * @ORM\Column(name="value_label", type="string")
     */
    private $valueLabel;
}

