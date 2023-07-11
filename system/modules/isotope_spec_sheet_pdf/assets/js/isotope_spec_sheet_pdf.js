
// ON FINISHED LOADING
$( document ).ready(function() {

    // When the "Complete Work Assignment" button is clicked
    $('.mod_isotope_spec_sheet_pdf #generate_pdf').on("click", function(e) {

        console.log("PDF: Link clicked");

        /*
        $.ajax({
            url:'/system/modules/isotope_spec_sheet_pdf/assets/php/action.generate.pdf.php',
            type:'POST',
            success:function(result){
                console.log("PDF: Generation Successful");
            },
            error:function(result){
                console.log("PDF: Generation Failure");
            }
        });
        */
    
    });

});
