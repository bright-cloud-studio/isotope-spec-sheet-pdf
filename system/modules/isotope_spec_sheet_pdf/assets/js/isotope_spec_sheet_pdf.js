
// When the page has finished loading entirely
$(document).ready(function() {
    
    // When the "Complete Work Assignment" button is clicked
    $('.mod_isotope_spec_sheet_pdf #generate_pdf').on("click", function(e) {

        // Push a clicked message to the console so we know our event triggered
        console.log("PDF: Link clicked");
        
        /* Get information that's on page */
        var product_image = $('.main_image img').attr('src');
        var product_id = $('.hidden_data #product_id').text();
        
        console.log("product_id: " + product_id);
        

        // Ajax call is using a plugin "jquery-ajax-native.js" that allows it to get the returned data in the correct format, otherwise we were downloading a blank PDF
        $.ajax({
            dataType: 'native',
            url:'/system/modules/isotope_spec_sheet_pdf/assets/php/action.generate.pdf.php',
            type:'POST',
            data: { product_image: product_image, product_id: product_id },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(data) {
                
                // Get our returned data as a blob
                var blob = new Blob([data], {type: 'application/pdf'});
                // Create a new link
                var link = document.createElement('a');
                // Set that link to our returned blob
                link.href = window.URL.createObjectURL(blob);
                // Set the file name
                link.download = "spec_sheet.pdf";
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



function genPDF() {
    
    /* Get information that's on page */
    var product_image = $('.main_image img').attr('src');
    var product_id = $('.hidden_data #product_id').text();
    
    console.log("product_id: " + product_id);
    

    // Ajax call is using a plugin "jquery-ajax-native.js" that allows it to get the returned data in the correct format, otherwise we were downloading a blank PDF
    $.ajax({
        dataType: 'native',
        url:'/system/modules/isotope_spec_sheet_pdf/assets/php/action.generate.pdf.php',
        type:'POST',
        data: { product_image: product_image, product_id: product_id },
        xhrFields: {
            responseType: 'blob'
        },
        success: function(data) {
            
            // Get our returned data as a blob
            var blob = new Blob([data], {type: 'application/pdf'});
            // Create a new link
            var link = document.createElement('a');
            // Set that link to our returned blob
            link.href = window.URL.createObjectURL(blob);
            // Set the file name
            link.download = "spec_sheet.pdf";
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
    
}
