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

/* Register the classes */
ClassLoader::addClasses(array
(
    // Our Frontend Modules
    'Bcs\Module\IsotopeSpecSheetPDF'    => 'system/modules/isotope_spec_sheet_pdf/library/Bcs/Module/IsotopeSpecSheetPDF.php'
));

/* Register the templates */
TemplateLoader::addFiles(array
(
    'mod_isotope_spec_sheet_pdf'              => 'system/modules/isotope_spec_sheet_pdf/templates/modules'
));
