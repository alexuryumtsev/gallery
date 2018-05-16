<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xVotes
 *
 * @ORM\Table(name="cpg15x_votes")
 * @ORM\Entity
 */
class Cpg15xVotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vote_time", type="integer", nullable=false)
     */
    private $voteTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $picId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_md5_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userMd5Id;


}

