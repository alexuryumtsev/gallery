<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xDict
 *
 * @ORM\Table(name="cpg15x_dict", uniqueConstraints={@ORM\UniqueConstraint(name="keyword", columns={"keyword"})})
 * @ORM\Entity
 */
class Cpg15xDict
{
    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=60, nullable=false)
     */
    private $keyword;

    /**
     * @var integer
     *
     * @ORM\Column(name="keyId", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyid;


}

