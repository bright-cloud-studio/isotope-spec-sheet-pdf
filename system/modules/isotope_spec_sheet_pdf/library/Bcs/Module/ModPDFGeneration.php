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
        
        protected $strTemplate = 'mod_isotope_spec_sheet_pdf';
    
        public function __construct($objModule, $strColumn='main')
        {
            parent::__construct($objModule, $strColumn);
        }

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
            // add our js
            $rand_ver = rand(1,9999);
            $GLOBALS['TL_BODY'][] = '<script src="system/modules/isotope_spec_sheet_pdf/assets/js/isotope_spec_sheet_pdf.js?v='.$rand_ver.'"></script>';
        }

    } 
