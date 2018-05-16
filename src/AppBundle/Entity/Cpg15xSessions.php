<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xSessions
 *
 * @ORM\Table(name="cpg15x_sessions")
 * @ORM\Entity
 */
class Cpg15xSessions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="remember", type="integer", nullable=true)
     */
    private $remember = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId;


}

