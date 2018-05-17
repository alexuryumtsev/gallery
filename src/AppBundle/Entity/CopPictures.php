<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CopPictures
 *
 * @ORM\Table(name="cop_pictures", indexes={@ORM\Index(name="owner_id", columns={"owner_id"}), @ORM\Index(name="pic_hits", columns={"hits"}), @ORM\Index(name="pic_rate", columns={"pic_rating"}), @ORM\Index(name="aid_approved", columns={"aid", "approved"}), @ORM\Index(name="pic_aid", columns={"aid", "pid"})})
 * @ORM\Entity
 */
class CopPictures
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



    /**
     * Set aid
     *
     * @param integer $aid
     *
     * @return CopPictures
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set filepath
     *
     * @param string $filepath
     *
     * @return CopPictures
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return CopPictures
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set filesize
     *
     * @param integer $filesize
     *
     * @return CopPictures
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set totalFilesize
     *
     * @param integer $totalFilesize
     *
     * @return CopPictures
     */
    public function setTotalFilesize($totalFilesize)
    {
        $this->totalFilesize = $totalFilesize;

        return $this;
    }

    /**
     * Get totalFilesize
     *
     * @return integer
     */
    public function getTotalFilesize()
    {
        return $this->totalFilesize;
    }

    /**
     * Set pwidth
     *
     * @param integer $pwidth
     *
     * @return CopPictures
     */
    public function setPwidth($pwidth)
    {
        $this->pwidth = $pwidth;

        return $this;
    }

    /**
     * Get pwidth
     *
     * @return integer
     */
    public function getPwidth()
    {
        return $this->pwidth;
    }

    /**
     * Set pheight
     *
     * @param integer $pheight
     *
     * @return CopPictures
     */
    public function setPheight($pheight)
    {
        $this->pheight = $pheight;

        return $this;
    }

    /**
     * Get pheight
     *
     * @return integer
     */
    public function getPheight()
    {
        return $this->pheight;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return CopPictures
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set mtime
     *
     * @param \DateTime $mtime
     *
     * @return CopPictures
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * Get mtime
     *
     * @return \DateTime
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set ctime
     *
     * @param integer $ctime
     *
     * @return CopPictures
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return integer
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return CopPictures
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set picRating
     *
     * @param integer $picRating
     *
     * @return CopPictures
     */
    public function setPicRating($picRating)
    {
        $this->picRating = $picRating;

        return $this;
    }

    /**
     * Get picRating
     *
     * @return integer
     */
    public function getPicRating()
    {
        return $this->picRating;
    }

    /**
     * Set votes
     *
     * @param integer $votes
     *
     * @return CopPictures
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return integer
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CopPictures
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return CopPictures
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return CopPictures
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set approved
     *
     * @param string $approved
     *
     * @return CopPictures
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set galleryicon
     *
     * @param integer $galleryicon
     *
     * @return CopPictures
     */
    public function setGalleryicon($galleryicon)
    {
        $this->galleryicon = $galleryicon;

        return $this;
    }

    /**
     * Get galleryicon
     *
     * @return integer
     */
    public function getGalleryicon()
    {
        return $this->galleryicon;
    }

    /**
     * Set user1
     *
     * @param string $user1
     *
     * @return CopPictures
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return string
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set user2
     *
     * @param string $user2
     *
     * @return CopPictures
     */
    public function setUser2($user2)
    {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return string
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set user3
     *
     * @param string $user3
     *
     * @return CopPictures
     */
    public function setUser3($user3)
    {
        $this->user3 = $user3;

        return $this;
    }

    /**
     * Get user3
     *
     * @return string
     */
    public function getUser3()
    {
        return $this->user3;
    }

    /**
     * Set user4
     *
     * @param string $user4
     *
     * @return CopPictures
     */
    public function setUser4($user4)
    {
        $this->user4 = $user4;

        return $this;
    }

    /**
     * Get user4
     *
     * @return string
     */
    public function getUser4()
    {
        return $this->user4;
    }

    /**
     * Set urlPrefix
     *
     * @param boolean $urlPrefix
     *
     * @return CopPictures
     */
    public function setUrlPrefix($urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;

        return $this;
    }

    /**
     * Get urlPrefix
     *
     * @return boolean
     */
    public function getUrlPrefix()
    {
        return $this->urlPrefix;
    }

    /**
     * Set picRawIp
     *
     * @param string $picRawIp
     *
     * @return CopPictures
     */
    public function setPicRawIp($picRawIp)
    {
        $this->picRawIp = $picRawIp;

        return $this;
    }

    /**
     * Get picRawIp
     *
     * @return string
     */
    public function getPicRawIp()
    {
        return $this->picRawIp;
    }

    /**
     * Set picHdrIp
     *
     * @param string $picHdrIp
     *
     * @return CopPictures
     */
    public function setPicHdrIp($picHdrIp)
    {
        $this->picHdrIp = $picHdrIp;

        return $this;
    }

    /**
     * Get picHdrIp
     *
     * @return string
     */
    public function getPicHdrIp()
    {
        return $this->picHdrIp;
    }

    /**
     * Set lasthitIp
     *
     * @param string $lasthitIp
     *
     * @return CopPictures
     */
    public function setLasthitIp($lasthitIp)
    {
        $this->lasthitIp = $lasthitIp;

        return $this;
    }

    /**
     * Get lasthitIp
     *
     * @return string
     */
    public function getLasthitIp()
    {
        return $this->lasthitIp;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return CopPictures
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set guestToken
     *
     * @param string $guestToken
     *
     * @return CopPictures
     */
    public function setGuestToken($guestToken)
    {
        $this->guestToken = $guestToken;

        return $this;
    }

    /**
     * Get guestToken
     *
     * @return string
     */
    public function getGuestToken()
    {
        return $this->guestToken;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }
}
