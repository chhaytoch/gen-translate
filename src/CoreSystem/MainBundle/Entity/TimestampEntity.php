<?php

namespace CoreSystem\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MainEntity
 */
class TimestampEntity extends MainEntity
{
    /**
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    protected $createdDate;

    /**
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    protected $modifiedDate;

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     * @ORM\PrePersist()
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param mixed $modifiedDate
     * @ORM\PreUpdate()
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdDate = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue()
    {
        $this->modifiedDate = new \DateTime();
    }
}

