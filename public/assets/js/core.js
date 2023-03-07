////////////////////////////////////////
//
// Universal contact form ajax submission
//
////////////////////////////////////////

$(document).ready(function(){

    if($('.zform').length){
        $('.zform').each(function(){

            var $form = $(this);

            $form.on('submit', function(e){
                
                e.preventDefault();

                var $submit = $form.find(":submit"),
                    submitText = $submit.val();
                    
                $submit.val("Sending...");

                $.ajax({
                    type: 'post',
                    url: 'assets/php/form-processor.php',
                    data: $(this).serialize(), // again, keep generic so this applies to any form
                    success: function (result) {
                        $form.find(".zform-feedback").html(result);
                        $submit.val(submitText);
                        $form.trigger("reset");
                    }
                });
            });

        });

    }

});
