<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xHitStats
 *
 * @ORM\Table(name="cpg15x_hit_stats")
 * @ORM\Entity
 */
class Cpg15xHitStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="pid", type="string", length=100, nullable=false)
     */
    private $pid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="search_phrase", type="string", length=255, nullable=false)
     */
    private $searchPhrase = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sdate", type="bigint", nullable=false)
     */
    private $sdate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="text", length=65535, nullable=false)
     */
    private $referer;

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", length=255, nullable=false)
     */
    private $browser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=50, nullable=false)
     */
    private $os = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;


}

