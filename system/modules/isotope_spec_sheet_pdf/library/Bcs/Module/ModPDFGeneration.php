<?php

  /**
  * Bright Cloud Studio's Isotope Spec Sheet PDF
  *
  * Copyright (C) 2023 Bright Cloud Studio
  *
  * @package    bright-cloud-studio/isotope-spec-sheet-pdf
  * @link       https://www.brightcloudstudio.com/
  * @license    http://opensource.org/licenses/lgpl-3.0.html
  **/


namespace Bcs\Module;

class ModPDFGeneration extends \Contao\Module
{

  /**
  * Template
  * @var string
  */
  protected $strTemplate = 'mod_isotope_spec_sheet_pdf';

  /**
  * Initialize the object
  *
  * @param \ModuleModel $objModule
  * @param string       $strColumn
  */
  public function __construct($objModule, $strColumn='main')
  {
    parent::__construct($objModule, $strColumn);
  }

  /**
  * Display a wildcard in the back end
  * @return string
  */
  public function generate()
  {
    if (TL_MODE == 'BE')
    {
    $objTemplate = new \BackendTemplate('be_wildcard');

    $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['isotope_spec_sheet_pdf'][0]) . ' ###';
    $objTemplate->title = $this->headline;
    $objTemplate->id = $this->id;
    $objTemplate->link = $this->name;
    $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;

    return $objTemplate->parse();
  }

  return parent::generate();
  }

  /* Generate the module */
  protected function compile()
  {
  }
  
} 
