<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oauth2AccessTokens
 *
 * @ORM\Table(name="oauth2_access_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D247A21B5F37A13B", columns={"token"})}, indexes={@ORM\Index(name="IDX_D247A21B19EB6921", columns={"client_id"}), @ORM\Index(name="IDX_D247A21BA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Oauth2AccessTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="expires_at", type="integer", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255, nullable=true)
     */
    private $scope;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Oauth2Clients
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oauth2Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
