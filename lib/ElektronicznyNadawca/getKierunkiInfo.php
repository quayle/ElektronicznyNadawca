<?php

namespace PocztaPolska\ElektronicznyNadawca;

class getKierunkiInfo
{

    /**
     * @var string $plan
     */
    protected $plan = null;

    /**
     * @param string $plan
     */
    public function __construct($plan)
    {
      $this->plan = $plan;
    }

    /**
     * @return string
     */
    public function getPlan()
    {
      return $this->plan;
    }

    /**
     * @param string $plan
     * @return \PocztaPolska\ElektronicznyNadawca\getKierunkiInfo
     */
    public function setPlan($plan)
    {
      $this->plan = $plan;
      return $this;
    }

}
