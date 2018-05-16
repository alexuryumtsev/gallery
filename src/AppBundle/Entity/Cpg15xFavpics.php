<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xFavpics
 *
 * @ORM\Table(name="cpg15x_favpics")
 * @ORM\Entity
 */
class Cpg15xFavpics
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_favpics", type="text", length=65535, nullable=false)
     */
    private $userFavpics;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;


}

