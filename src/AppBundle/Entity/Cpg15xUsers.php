<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xUsers
 *
 * @ORM\Table(name="cpg15x_users", uniqueConstraints={@ORM\UniqueConstraint(name="user_name", columns={"user_name"})}, indexes={@ORM\Index(name="user_group", columns={"user_group"})})
 * @ORM\Entity
 */
class Cpg15xUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_group", type="integer", nullable=false)
     */
    private $userGroup = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="user_active", type="string", nullable=false)
     */
    private $userActive = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=25, nullable=false)
     */
    private $userName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=40, nullable=false)
     */
    private $userPassword = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_lastvisit", type="datetime", nullable=false)
     */
    private $userLastvisit = '1000-01-01 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_regdate", type="datetime", nullable=false)
     */
    private $userRegdate = '1000-01-01 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="user_group_list", type="string", length=255, nullable=false)
     */
    private $userGroupList = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=false)
     */
    private $userEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_email_valid", type="string", nullable=false)
     */
    private $userEmailValid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile1", type="string", length=255, nullable=false)
     */
    private $userProfile1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile2", type="string", length=255, nullable=false)
     */
    private $userProfile2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile3", type="string", length=255, nullable=false)
     */
    private $userProfile3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile4", type="string", length=255, nullable=false)
     */
    private $userProfile4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile5", type="string", length=255, nullable=false)
     */
    private $userProfile5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_profile6", type="text", length=65535, nullable=false)
     */
    private $userProfile6;

    /**
     * @var string
     *
     * @ORM\Column(name="user_actkey", type="string", length=32, nullable=false)
     */
    private $userActkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_language", type="string", length=40, nullable=false)
     */
    private $userLanguage = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;


}

