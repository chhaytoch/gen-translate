<?php

namespace Frontend\LangBundle\Entity;

use CoreSystem\MainBundle\Entity\UserLogEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lang
 *
 * @ORM\Table(name="lang")
 * @ORM\Entity(repositoryClass="Frontend\LangBundle\Repository\LangRepository")
 */
class Lang extends UserLogEntity
{
    /**
     * @ORM\Column(name="lang_name", type="string")
     */
    private $langName;
    
    /**
     * @return mixed
     */
    public function getLangName()
    {
        return $this->langName;
    }

    /**
     * @param mixed $langName
     */
    public function setLangName($langName)
    {
        $this->langName = $langName;
    }
}

