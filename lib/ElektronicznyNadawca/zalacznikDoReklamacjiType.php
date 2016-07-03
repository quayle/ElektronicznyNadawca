<?php

namespace PocztaPolska\ElektronicznyNadawca;

class zalacznikDoReklamacjiType
{

    /**
     * @var base64Binary $fileContent
     */
    protected $fileContent = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $fileDesc
     */
    protected $fileDesc = null;

    /**
     * @param base64Binary $fileContent
     * @param string $fileName
     */
    public function __construct($fileContent, $fileName)
    {
      $this->fileContent = $fileContent;
      $this->fileName = $fileName;
    }

    /**
     * @return base64Binary
     */
    public function getFileContent()
    {
      return $this->fileContent;
    }

    /**
     * @param base64Binary $fileContent
     * @return \PocztaPolska\ElektronicznyNadawca\zalacznikDoReklamacjiType
     */
    public function setFileContent($fileContent)
    {
      $this->fileContent = $fileContent;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \PocztaPolska\ElektronicznyNadawca\zalacznikDoReklamacjiType
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileDesc()
    {
      return $this->fileDesc;
    }

    /**
     * @param string $fileDesc
     * @return \PocztaPolska\ElektronicznyNadawca\zalacznikDoReklamacjiType
     */
    public function setFileDesc($fileDesc)
    {
      $this->fileDesc = $fileDesc;
      return $this;
    }

}
