<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xExif
 *
 * @ORM\Table(name="cpg15x_exif")
 * @ORM\Entity
 */
class Cpg15xExif
{
    /**
     * @var string
     *
     * @ORM\Column(name="exifData", type="text", length=65535, nullable=false)
     */
    private $exifdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;


}

