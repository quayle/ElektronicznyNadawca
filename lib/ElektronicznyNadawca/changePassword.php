<?php

namespace PocztaPolska\ElektronicznyNadawca;

class changePassword
{

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param string $newPassword
     */
    public function __construct($newPassword)
    {
      $this->newPassword = $newPassword;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \PocztaPolska\ElektronicznyNadawca\changePassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
