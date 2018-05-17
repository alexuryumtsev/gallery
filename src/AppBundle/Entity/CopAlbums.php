<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CopAlbums
 *
 * @ORM\Table(name="cop_albums", indexes={@ORM\Index(name="alb_category", columns={"category"}), @ORM\Index(name="moderator_group", columns={"moderator_group"}), @ORM\Index(name="visibility", columns={"visibility"})})
 * @ORM\Entity
 */
class CopAlbums
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="visibility", type="integer", nullable=false)
     */
    private $visibility = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uploads", type="string", nullable=false)
     */
    private $uploads = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", nullable=false)
     */
    private $comments = 'YES';

    /**
     * @var string
     *
     * @ORM\Column(name="votes", type="string", nullable=false)
     */
    private $votes = 'YES';

    /**
     * @var integer
     *
     * @ORM\Column(name="pos", type="integer", nullable=false)
     */
    private $pos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="thumb", type="integer", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=50, nullable=true)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_password", type="string", length=32, nullable=true)
     */
    private $albPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_password_hint", type="text", length=65535, nullable=true)
     */
    private $albPasswordHint;

    /**
     * @var integer
     *
     * @ORM\Column(name="moderator_group", type="integer", nullable=false)
     */
    private $moderatorGroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="alb_hits", type="integer", nullable=false)
     */
    private $albHits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return CopAlbums
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
     * Set description
     *
     * @param string $description
     *
     * @return CopAlbums
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set visibility
     *
     * @param integer $visibility
     *
     * @return CopAlbums
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return integer
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set uploads
     *
     * @param string $uploads
     *
     * @return CopAlbums
     */
    public function setUploads($uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }

    /**
     * Get uploads
     *
     * @return string
     */
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return CopAlbums
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set votes
     *
     * @param string $votes
     *
     * @return CopAlbums
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return string
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     *
     * @return CopAlbums
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return CopAlbums
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return CopAlbums
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set thumb
     *
     * @param integer $thumb
     *
     * @return CopAlbums
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return integer
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return CopAlbums
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set albPassword
     *
     * @param string $albPassword
     *
     * @return CopAlbums
     */
    public function setAlbPassword($albPassword)
    {
        $this->albPassword = $albPassword;

        return $this;
    }

    /**
     * Get albPassword
     *
     * @return string
     */
    public function getAlbPassword()
    {
        return $this->albPassword;
    }

    /**
     * Set albPasswordHint
     *
     * @param string $albPasswordHint
     *
     * @return CopAlbums
     */
    public function setAlbPasswordHint($albPasswordHint)
    {
        $this->albPasswordHint = $albPasswordHint;

        return $this;
    }

    /**
     * Get albPasswordHint
     *
     * @return string
     */
    public function getAlbPasswordHint()
    {
        return $this->albPasswordHint;
    }

    /**
     * Set moderatorGroup
     *
     * @param integer $moderatorGroup
     *
     * @return CopAlbums
     */
    public function setModeratorGroup($moderatorGroup)
    {
        $this->moderatorGroup = $moderatorGroup;

        return $this;
    }

    /**
     * Get moderatorGroup
     *
     * @return integer
     */
    public function getModeratorGroup()
    {
        return $this->moderatorGroup;
    }

    /**
     * Set albHits
     *
     * @param integer $albHits
     *
     * @return CopAlbums
     */
    public function setAlbHits($albHits)
    {
        $this->albHits = $albHits;

        return $this;
    }

    /**
     * Get albHits
     *
     * @return integer
     */
    public function getAlbHits()
    {
        return $this->albHits;
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
}
