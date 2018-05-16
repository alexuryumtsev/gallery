<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xEcards
 *
 * @ORM\Table(name="cpg15x_ecards")
 * @ORM\Entity
 */
class Cpg15xEcards
{
    /**
     * @var string
     *
     * @ORM\Column(name="sender_name", type="string", length=50, nullable=false)
     */
    private $senderName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sender_email", type="text", length=65535, nullable=false)
     */
    private $senderEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_name", type="string", length=50, nullable=false)
     */
    private $recipientName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="recipient_email", type="text", length=65535, nullable=false)
     */
    private $recipientEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="text", length=255, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_ip", type="text", length=255, nullable=false)
     */
    private $senderIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="eid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eid;


}

