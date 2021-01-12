$(document).ready(function() {
    alert("Hey");

     // Select category
     $("#category").change(function(){
          var category = $("#category").val();
              $.ajax({
                //   window.alert("Hey there"),
                  type: "POST",
                  url: "../docs/sqlphp.php",
                  //form.formname  (elementname : class)
                  data: {category:category},
                  success: function(data){
        alert("Hey");

                      //var info = JSON.stringify(data);
                      var info = JSON.parse(data);
                      //alert(info.msg);
                      if (info.status == "success") {
                          $("#country").html('<option value="" disabled="" selected="">- Select -</option>'+info.msg);
                      }
                      else{
                          $("#country").html("<option disabled selected value=''>Choose a university above</option>");
                      }
                  },
                  error: function(){
                      // $("#errored").html("Something went wrong");
                  }
  
              });
          }) 

    $( ".mr-auto .nav-item" ).bind( "click", function(event) {
        event.preventDefault();
        var clickedItem = $( this );
        $( ".mr-auto .nav-item" ).each( function() {
            $( this ).removeClass( "active" );
        });
        clickedItem.addClass( "active" );
    })


    $("#shoed").bind("click", function(event) {
        event.preventDefault();
        var naved = $(".shoed");
        $( ".mr-auto .nav-item" ).each( function() {
            $( this ).removeClass( "active" );
        });
        naved.addClass( "active" );
        })
        // window.alert("Hey");

         
    });