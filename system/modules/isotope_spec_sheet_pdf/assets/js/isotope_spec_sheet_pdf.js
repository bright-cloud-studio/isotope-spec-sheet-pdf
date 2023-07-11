
// ON FINISHED LOADING
$( document ).ready(function() {
    
    // When the "Complete Work Assignment" button is clicked
    $('input[name="complete_work_assignment"]').on("click", function(e) {

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

    });

});
