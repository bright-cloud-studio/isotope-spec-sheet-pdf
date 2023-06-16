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

/* Add a palette to tl_module */

// Create Invoice
$GLOBALS['TL_DCA']['tl_module']['palettes']['mod_isotope_spec_sheet_pdf'] 		    = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{expert_legend:hide},guests,cssID,space';
