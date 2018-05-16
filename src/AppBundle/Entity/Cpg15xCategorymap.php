<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xCategorymap
 *
 * @ORM\Table(name="cpg15x_categorymap")
 * @ORM\Entity
 */
class Cpg15xCategorymap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupId;


}

