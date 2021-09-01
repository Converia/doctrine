<?php

namespace Port\Doctrine\Tests\Fixtures\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity()
 */
class User
{
    /** @Id @GeneratedValue @Column(type="integer") **/
    private $id;

    /** @Column(type="string") */
    private $username;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}
