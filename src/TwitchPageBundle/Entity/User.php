<?php

namespace TwitchPageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Class User
 * @package TwitchPageBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}