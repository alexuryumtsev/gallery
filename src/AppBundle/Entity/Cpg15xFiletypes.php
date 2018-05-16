<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xFiletypes
 *
 * @ORM\Table(name="cpg15x_filetypes")
 * @ORM\Entity
 */
class Cpg15xFiletypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="mime", type="string", length=254, nullable=true)
     */
    private $mime;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=15, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=5, nullable=true)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=7)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extension;


}

