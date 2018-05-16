<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xComments
 *
 * @ORM\Table(name="cpg15x_comments", indexes={@ORM\Index(name="com_pic_id", columns={"pid"}), @ORM\Index(name="author_id", columns={"author_id"})})
 * @ORM\Entity
 */
class Cpg15xComments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="msg_author", type="string", length=25, nullable=false)
     */
    private $msgAuthor = '';

    /**
     * @var string
     *
     * @ORM\Column(name="msg_body", type="text", length=65535, nullable=false)
     */
    private $msgBody;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="msg_date", type="datetime", nullable=false)
     */
    private $msgDate = '1000-01-01 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="msg_raw_ip", type="text", length=255, nullable=true)
     */
    private $msgRawIp;

    /**
     * @var string
     *
     * @ORM\Column(name="msg_hdr_ip", type="text", length=255, nullable=true)
     */
    private $msgHdrIp;

    /**
     * @var string
     *
     * @ORM\Column(name="author_md5_id", type="string", length=32, nullable=false)
     */
    private $authorMd5Id = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="approval", type="string", nullable=false)
     */
    private $approval = 'YES';

    /**
     * @var string
     *
     * @ORM\Column(name="spam", type="string", nullable=false)
     */
    private $spam = 'NO';

    /**
     * @var integer
     *
     * @ORM\Column(name="msg_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $msgId;


}

