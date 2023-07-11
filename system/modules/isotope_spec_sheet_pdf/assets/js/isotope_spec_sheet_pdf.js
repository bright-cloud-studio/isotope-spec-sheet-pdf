
// When the page has finished loading entirely
$(document).ready(function() {

    // When the "Complete Work Assignment" button is clicked
    $('.mod_isotope_spec_sheet_pdf #generate_pdf').on("click", function(e) {

        // Push a clicked message to the console so we know our event triggered
        console.log("PDF: Link clicked");

        // Load our template file and pass it to the php script
        var html_template;
        $.get( "../templates/fabrics_with_variants.html", function( data ) {
            html_template = data;
            // the contents is now in the variable data
            alert(html_template);
        });

        // Ajax call is using a plugin "jquery-ajax-native.js" that allows it to get the returned data in the correct format, otherwise we were downloading a blank PDF
        $.ajax({
            dataType: 'native',
            url:'/system/modules/isotope_spec_sheet_pdf/assets/php/action.generate.pdf.php?testy=test123',
            type:'POST',
            data: { html_template:html_template },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(data) {
                
                // Get our returned data as a blob
                var blob=new Blob([data], {type: 'application/pdf'});
                // Create a new link
                var link=document.createElement('a');
                // Set that link to our returned blob
                link.href=window.URL.createObjectURL(blob);
                // Set the file name
                link.download="spec_sheet.pdf";
                
                // for firefox
                document.body.appendChild(link);
                
                // CLick our invisible link to initiate our download
                link.click();
                
                // Push a success message to the console so we know things went well
                console.log("PDF: Generation Successful");
            },
            error:function(result){
                // Push a failure message to the console so we know we messed up somewhere
                console.log("PDF: Generation Failure");
            }
        }); // END OF Ajax call
        
    }); // END OF click event

}); // END OF ducument ready function
