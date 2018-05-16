<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xBanned
 *
 * @ORM\Table(name="cpg15x_banned")
 * @ORM\Entity
 */
class Cpg15xBanned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=false)
     */
    private $userName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr", type="text", length=255, nullable=true)
     */
    private $ipAddr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiry", type="datetime", nullable=true)
     */
    private $expiry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="brute_force", type="boolean", nullable=false)
     */
    private $bruteForce = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ban_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banId;


}

