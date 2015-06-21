<?php

namespace XSADMIN\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of User
 *
 * @author lazaro
 * 
 * @ORM\Table(name="003_user_group")
 * @ORM\Entity()
 */
class UserGroup {
    
    /**
     * @ORM\Column(type="bigint", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="group", cascade={"persist"},fetch="EAGER")
     * @ORM\JoinColumn(name="002_user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="user", cascade={"persist"},fetch="EAGER")
     * @ORM\JoinColumn(name="001_group_id", referencedColumnName="id")
     */
    private $group;
    
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    private $owner;
    
    function __construct($id = NULL, $owner = NULL) {
        $this->id = $id;
        $this->owner = $owner;
    }
    
    function getId() {
        return $this->id;
    }

    function getUser() {
        return $this->user;
    }

    function getGroup() {
        return $this->group;
    }

    function getOwner() {
        return $this->owner;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser(User $user) {
        $this->user = $user;
    }

    function setGroup(Group $group) {
        $this->group = $group;
    }

    function setOwner($owner) {
        $this->owner = $owner;
    }    
}
