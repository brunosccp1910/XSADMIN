<?php
namespace XSADMIN\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Description of User
 *
 * @author lazaro
 * 
 * @ORM\Table(name="002_user")
 * @ORM\Entity()
 */
class User {
    
    /**
     * @ORM\Column(type="bigint", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="UserGroup", mappedBy="user", cascade={"all"}, orphanRemoval=true, fetch="LAZY") 
     */
    private $group;
    
    /**
     * @ORM\Column(type="string", length=100, unique=false, nullable=false)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=100, unique=true, nullable=false)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=15, unique=false, nullable=false)
     */
    private $password;
    
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    private $admin;
    
    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    private $active;
    
    /**
     * @ORM\Column(type="string", length=15, unique=false, nullable=false)
     */
    private $type;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthdate;
    
    /**
     * @ORM\Column(type="string", length=15, unique=false, nullable=true)
     */
    private $phone;
    
    function __construct($id = NULL, $group = NULL, $name = NULL, $email = NULL, $password = NULL, $admin = NULL, $active = NULL,
            $type = NULL, $birthdate = NULL, $phone = NULL) {
        $this->id = $id;
        $this->group = new ArrayCollection();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->admin = $admin;
        $this->active = $active;
        $this->type = $type;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
    }
    
    function getId() {
        return $this->id;
    }

    function getGroup() {
        return $this->group;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getAdmin() {
        return $this->admin;
    }

    function getActive() {
        return $this->active;
    }

    function getType() {
        return $this->type;
    }

    function getBirthdate() {
        return $this->birthdate;
    }

    function getPhone() {
        return $this->phone;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setGroup(Group $group) {
        $this->group = $group;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

    function setActive($active) {
        $this->active = $active;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }    
    
}
