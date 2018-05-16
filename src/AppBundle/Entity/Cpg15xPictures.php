<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xPictures
 *
 * @ORM\Table(name="cpg15x_pictures", indexes={@ORM\Index(name="owner_id", columns={"owner_id"}), @ORM\Index(name="pic_hits", columns={"hits"}), @ORM\Index(name="pic_rate", columns={"pic_rating"}), @ORM\Index(name="aid_approved", columns={"aid", "approved"}), @ORM\Index(name="pic_aid", columns={"aid", "pid"})})
 * @ORM\Entity
 */
class Cpg15xPictures
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=255, nullable=false)
     */
    private $filepath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="filesize", type="integer", nullable=false)
     */
    private $filesize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_filesize", type="integer", nullable=false)
     */
    private $totalFilesize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pwidth", type="smallint", nullable=false)
     */
    private $pwidth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pheight", type="smallint", nullable=false)
     */
    private $pheight = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mtime", type="datetime", nullable=false)
     */
    private $mtime = '1000-01-01 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="ctime", type="integer", nullable=false)
     */
    private $ctime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=false)
     */
    private $ownerId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pic_rating", type="integer", nullable=false)
     */
    private $picRating = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="votes", type="integer", nullable=false)
     */
    private $votes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="text", length=65535, nullable=false)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="string", nullable=false)
     */
    private $approved = 'NO';

    /**
     * @var integer
     *
     * @ORM\Column(name="galleryicon", type="integer", nullable=false)
     */
    private $galleryicon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user1", type="string", length=255, nullable=false)
     */
    private $user1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user2", type="string", length=255, nullable=false)
     */
    private $user2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user3", type="string", length=255, nullable=false)
     */
    private $user3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user4", type="string", length=255, nullable=false)
     */
    private $user4 = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="url_prefix", type="boolean", nullable=false)
     */
    private $urlPrefix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pic_raw_ip", type="text", length=255, nullable=true)
     */
    private $picRawIp;

    /**
     * @var string
     *
     * @ORM\Column(name="pic_hdr_ip", type="text", length=255, nullable=true)
     */
    private $picHdrIp;

    /**
     * @var string
     *
     * @ORM\Column(name="lasthit_ip", type="text", length=255, nullable=true)
     */
    private $lasthitIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="guest_token", type="string", length=32, nullable=true)
     */
    private $guestToken = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;


}

