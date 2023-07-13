# Bright Cloud Studio's Isotope Spec Sheet PDF
## Generates a PDF Spec Sheet when clicking a link on an Isotope Product Reader page within Contao.

This package adds a link to Isotope's Product Reader which when clicked will generate a PDF "spec sheet" file containing information found on the page. Typically, our clients are always creating PDF spec sheets that need to be updated. This will instead create the spec sheets on the fly, always containing the latest information.

# Templates
Each product type will need it's own template. In the 'system/modules/isotope_spec_sheet_pdf/assets/templates' folder make a new template with the title "product_type_ID.html" where ID is the numeric ID of the product type within Isotope.

# Templates - Tags
Within each template you can use tags that will be replaced with the product data when the PDF is generated. Here is a list of manual tags that have hard-coded uses
{{img_src}} - This tag will be replaced with the main image's source.

If you want to include a product's attribute in the template use the following tag
{{product::ATTRIBUTE}} where ATTRIBUTE is the internal name of that product's attribute.
