<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpg15xLanguages
 *
 * @ORM\Table(name="cpg15x_languages")
 * @ORM\Entity
 */
class Cpg15xLanguages
{
    /**
     * @var string
     *
     * @ORM\Column(name="english_name", type="string", length=70, nullable=true)
     */
    private $englishName;

    /**
     * @var string
     *
     * @ORM\Column(name="native_name", type="string", length=70, nullable=true)
     */
    private $nativeName;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_name", type="string", length=70, nullable=true)
     */
    private $customName;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=15, nullable=true)
     */
    private $flag;

    /**
     * @var string
     *
     * @ORM\Column(name="abbr", type="string", length=15, nullable=false)
     */
    private $abbr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="available", type="string", nullable=false)
     */
    private $available = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="enabled", type="string", nullable=false)
     */
    private $enabled = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="complete", type="string", nullable=false)
     */
    private $complete = 'NO';

    /**
     * @var string
     *
     * @ORM\Column(name="lang_id", type="string", length=40)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $langId;


}

