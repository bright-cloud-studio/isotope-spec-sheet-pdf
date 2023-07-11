
// ON FINISHED LOADING
$( document ).ready(function() {

    // When the "Complete Work Assignment" button is clicked
    $('.mod_isotope_spec_sheet_pdf #generate_pdf').on("click", function(e) {

        console.log("PDF: Link clicked");

        
        $.ajax({
            url:'/system/modules/isotope_spec_sheet_pdf/assets/php/action.generate.pdf.php',
            type:'POST',
            responseType: 'arraybuffer',
            
            success: function(data) {
                var blob=new Blob([data], {type: 'application/pdf'});
                var link=document.createElement('a');
                link.href=window.URL.createObjectURL(blob);
                link.download="spec_sheet.pdf";
                link.click();
              }
            
            
            /*
            success:function(result){
                console.log("PDF: Generation Successful");
            },
            error:function(result){
                console.log("PDF: Generation Failure");
            }
            */
        });
        
    
    });

});
