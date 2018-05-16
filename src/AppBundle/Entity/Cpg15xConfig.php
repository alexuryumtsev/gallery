<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xConfig
 *
 * @ORM\Table(name="cpg15x_config")
 * @ORM\Entity
 */
class Cpg15xConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;


}

