<?php

namespace PocztaPolska\ElektronicznyNadawca;

class accountType
{

    /**
     * @var kartaType[] $karta
     */
    protected $karta = null;

    /**
     * @var permisionType[] $permision
     */
    protected $permision = null;

    /**
     * @var profilType $profil
     */
    protected $profil = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var statusAccountType $status
     */
    protected $status = null;

    /**
     * @param kartaType[] $karta
     * @param profilType $profil
     * @param string $userName
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param statusAccountType $status
     */
    public function __construct(array $karta, $profil, $userName, $firstName, $lastName, $email, $status)
    {
      $this->karta = $karta;
      $this->profil = $profil;
      $this->userName = $userName;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->status = $status;
    }

    /**
     * @return kartaType[]
     */
    public function getKarta()
    {
      return $this->karta;
    }

    /**
     * @param kartaType[] $karta
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setKarta(array $karta)
    {
      $this->karta = $karta;
      return $this;
    }

    /**
     * @return permisionType[]
     */
    public function getPermision()
    {
      return $this->permision;
    }

    /**
     * @param permisionType[] $permision
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setPermision(array $permision = null)
    {
      $this->permision = $permision;
      return $this;
    }

    /**
     * @return profilType
     */
    public function getProfil()
    {
      return $this->profil;
    }

    /**
     * @param profilType $profil
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setProfil($profil)
    {
      $this->profil = $profil;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return statusAccountType
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusAccountType $status
     * @return \PocztaPolska\ElektronicznyNadawca\accountType
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
