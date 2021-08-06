//JQuery Script
      // $(document).ready(function(){
        function handleSubmit() {
          console.log("function working!")
          var nm = $("#name").val();
          var em = $("#email").val();
          var sub = $("#subject").val();
          var ms = $("#message").val();
          //instead of doing the below datastring, pass the variables into a JSON and pass that JSON into your flask app.
          var dataString = 'nm1='+ nm + '&em1=' +em + '&sub1=' + sub + '&ms1='+ ms;
          if(nm==''||em==''||sub==''||ms=='') {
            $("#display").html("<div class='alert alert-warning'>Please Fill All Fields.</div>");
          }
          else{
            $.ajax({
              type:"POST",
              //url:route to flask app
              data:dataString, //look at route from group project and put the above varaibles into a json
              cache: false,
              success: function(result){
                $("#display").html(result);
              }
            });
          }return false; 
        };
      // });