<?php

namespace XSADMIN\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Group
 *
 * @author lazaro
 * @ORM\Table(name="001_group")
 * @ORM\Entity()
 */
class Group {
    
    /**
     * @ORM\Column(type="bigint", unique=true, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="company", cascade={"all"}, orphanRemoval=true, fetch="LAZY") 
     */
    private $user;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $acronym;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $phone;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;
    
    function __construct($id = NULL, $name = NULL, $acronym = NULL, $description = NULL, $email = NULL, $phone = NULL, $addess = NULL) {
        $this->is = $id;
                $this->name = $name;
                $this->acronym = $acronym;
                $this->description = $description;
                $this->email = $email;
                $this->phone = $phone;
                $this-> address = $addess;
                $this->user = new ArrayCollection();
    }
    
    function getId() {
        return $this->id;
    }

    function getUser() {
        return $this->user;
    }

    function getName() {
        return $this->name;
    }

    function getAcronym() {
        return $this->acronym;
    }

    function getDescription() {
        return $this->description;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getAddress() {
        return $this->address;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAcronym($acronym) {
        $this->acronym = $acronym;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setAddress($address) {
        $this->address = $address;
    }
}
