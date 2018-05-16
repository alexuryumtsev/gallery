<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xCategories
 *
 * @ORM\Table(name="cpg15x_categories", indexes={@ORM\Index(name="cat_parent", columns={"parent"}), @ORM\Index(name="cat_pos", columns={"pos"}), @ORM\Index(name="cat_owner_id", columns={"owner_id"}), @ORM\Index(name="depth_cid", columns={"depth", "cid"}), @ORM\Index(name="lft_depth", columns={"lft", "depth"})})
 * @ORM\Entity
 */
class Cpg15xCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb", type="integer", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="depth", type="boolean", nullable=false)
     */
    private $depth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;


}

