
    function ajaxCall() {
        this.send = function(data, url, method, success, type) {
          type = type||'json';
          var successRes = function(data) {
              success(data);
          }

          var errorRes = function(e) {
            console.log(e);
             alert("Error found \nError Code: "+e.status+" \nError Message: "+e.statusText);
             $('#loader').modal('hide');
          }
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: successRes,
                error: errorRes,
                dataType: type,
                timeout: 60000
            });

          }

        }

        function locationInfo() {
            var rootUrl = "https://cors-anywhere.herokuapp.com/http://iamrohit.in/lab/php_ajax_country_state_city_dropdown/api.php";  // Added CORS proxy here
            var call = new ajaxCall();
            this.getCities = function(id) {
                $(".cities option:gt(0)").remove();
                var url = rootUrl + '?type=getCities&stateId=' + id;
                var method = "post";
                var data = {};
                $('.cities').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    $('.cities').find("option:eq(0)").html("Select City");
                    if(data.tp == 1){
                        $.each(data['result'], function(key, val) {
                            var option = $('<option />');
                            option.attr('value', val).text(val);
                            option.attr('cityid', key);
                            $('.cities').append(option);
                        });
                        $(".cities").prop("disabled", false);
                    }
                    else{
                        alert(data.msg);
                    }
                });
            };
        
            this.getStates = function(id) {
                $(".states option:gt(0)").remove();
                $(".cities option:gt(0)").remove();
                var url = rootUrl + '?type=getStates&countryId=' + id;
                var method = "post";
                var data = {};
                $('.states').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    $('.states').find("option:eq(0)").html("Select State");
                    if(data.tp == 1){
                        $.each(data['result'], function(key, val) {
                            var option = $('<option />');
                            option.attr('value', val).text(val);
                            option.attr('stateid', key);
                            $('.states').append(option);
                        });
                        $(".states").prop("disabled", false);
                    }
                    else{
                        alert(data.msg);
                    }
                });
            };
        
            this.getCountries = function() {
                var url = rootUrl + '?type=getCountries';
                var method = "post";
                var data = {};
                $('.countries').find("option:eq(0)").html("Please wait..");
                call.send(data, url, method, function(data) {
                    $('.countries').find("option:eq(0)").html("Select Country");
                    console.log(data);
                    if(data.tp == 1){
                        $.each(data['result'], function(key, val) {
                            var option = $('<option />');
                            option.attr('value', val).text(val);
                            option.attr('countryid', key);
                            $('.countries').append(option);
                        });
                        $(".countries").prop("disabled", false);
                    }
                    else{
                        alert(data.msg);
                    }
                });
            };
        }
        
