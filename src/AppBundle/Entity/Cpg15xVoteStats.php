<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xVoteStats
 *
 * @ORM\Table(name="cpg15x_vote_stats")
 * @ORM\Entity
 */
class Cpg15xVoteStats
{
    /**
     * @var string
     *
     * @ORM\Column(name="pid", type="string", length=100, nullable=false)
     */
    private $pid = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint", nullable=false)
     */
    private $rating = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

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

