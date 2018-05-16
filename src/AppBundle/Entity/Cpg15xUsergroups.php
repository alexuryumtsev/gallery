<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xUsergroups
 *
 * @ORM\Table(name="cpg15x_usergroups")
 * @ORM\Entity
 */
class Cpg15xUsergroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=false)
     */
    private $groupName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_quota", type="integer", nullable=false)
     */
    private $groupQuota = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_admin_access", type="boolean", nullable=false)
     */
    private $hasAdminAccess = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_rate_pictures", type="boolean", nullable=false)
     */
    private $canRatePictures = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_send_ecards", type="boolean", nullable=false)
     */
    private $canSendEcards = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_post_comments", type="boolean", nullable=false)
     */
    private $canPostComments = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_upload_pictures", type="boolean", nullable=false)
     */
    private $canUploadPictures = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="can_create_albums", type="boolean", nullable=false)
     */
    private $canCreateAlbums = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pub_upl_need_approval", type="boolean", nullable=false)
     */
    private $pubUplNeedApproval = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="priv_upl_need_approval", type="boolean", nullable=false)
     */
    private $privUplNeedApproval = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="access_level", type="boolean", nullable=false)
     */
    private $accessLevel = '3';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;


}

