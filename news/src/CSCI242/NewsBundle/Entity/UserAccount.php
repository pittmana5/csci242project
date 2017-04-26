<?php

namespace CSCI242\NewsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * UserAccount
 *
 * @ORM\Table(name="user_account")
 * @ORM\Entity(repositoryClass="CSCI242\NewsBundle\Repository\UserAccountRepository")
 */
class UserAccount extends BaseUser
{

    private $id;
    
    public function __construct() {
        parent::__construct();
        
    }

    
    public function getId()
    {
        return $this->id;
    }
    
}