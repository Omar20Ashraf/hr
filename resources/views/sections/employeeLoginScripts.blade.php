<script>
    function ShowCerificate(that,$num){
        var option_value = that.value;
        if(option_value){
            $('#certificates_'+$num).show();
        }
    }

    var companyFirst = document.getElementById("company_name_first");

    //add required to the dates
    $('input[name=company_name_first]').keyup(function(){
        if($(this).val().length){
            document.getElementById("company_from_date_first").setAttribute("required", "required");
            document.getElementById("company_to_date_first").setAttribute("required", "required");
        }
        else{
            document.getElementById("company_from_date_first").removeAttribute("required");
            document.getElementById("company_to_date_first").removeAttribute("required");
        }
    });

    $('input[name=company_name_second]').keyup(function(){
        if($(this).val().length){
            document.getElementById("company_from_date_second").setAttribute("required", "required");
            document.getElementById("company_to_date_second").setAttribute("required", "required");

            if(companyFirst.value){

              $('#company-third').show();
              // $('#company_date_third').show();
            }

        }
        else{
                document.getElementById("company_from_date_second").removeAttribute("required");
                document.getElementById("company_to_date_second").removeAttribute("required");
              $('#company-third').hide();

                document.getElementById("company_name_third").value = '';
                document.getElementById("company_from_date_third").removeAttribute("required");
                document.getElementById("company_to_date_third").removeAttribute("required");

              // $('#company_date_third').hide();
        }
    });

    $('input[name=company_name_third]').keyup(function(){
        if($(this).val().length){
            document.getElementById("company_from_date_third").setAttribute("required", "required");
            document.getElementById("company_to_date_third").setAttribute("required", "required");
        }
        else{
            document.getElementById("company_from_date_third").removeAttribute("required");
            document.getElementById("company_to_date_third").removeAttribute("required");
        }
    });
</script>
