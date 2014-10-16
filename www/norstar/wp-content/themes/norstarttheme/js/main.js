(function(window) {

    // MAIN //

    var Norstar = window.Norstar = {};

    Norstar.Session = {};
    Norstar.Views = {};

    Norstar.init = function(){
        Norstar.initRequiredOverlay();       
    };

    Norstar.initRequiredOverlay = function(){

        $("#freezer").click(function(){
            if($dom.is(":visible")){
                Norstar.HideRequiredOverlay();
            }
        });

    };

    Norstar.HideRequiredOverlay = function(){
        $("#freezer").hide();
    };

    Norstar.DisplayRequiredOverlay = function(){
        $("#freezer").show();
    };

    Norstar.Utils = {
        checkEmail: function(email){

            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email))
                return false;

            return true;
        },

        padNumberLeft: function(number, length) {

            var str = '' + number;
            while (str.length < length) {
                str = '0' + str;
            }

            return str;
        },

        // showAlert: function(message, expire){

        //    var alert = $(".alert-message");

        //    $(".message", alert).html(message);
        //    $(".close", alert).click(function(){
        //         alert.hide();
        //     });

        //     alert.show();
        //     if(expire){
        //         setTimeout(function(){
        //             alert.fadeOut("fast");
        //             $('.close', alert).unbind('click');
        //         }, 2000);
        //     }

        // },

        getPosition: function(day, type){

            var position = 0;

            if(parseInt(day) == 0){

                if(parseInt(type) == 0)
                    position = 0;

                if(parseInt(type) == 1)
                    position = 1;

                if(parseInt(type) == 2)
                    position = 2;
            }

            if(parseInt(day) == 1){

                if(parseInt(type) == 0)
                    position = 3;

                if(parseInt(type) == 1)
                    position = 4;

                if(parseInt(type) == 2)
                    position = 5;
            }


            if(parseInt(day) == 2){

                if(parseInt(type) == 0)
                    position = 6;

                if(parseInt(type) == 1)
                    position = 7;

                if(parseInt(type) == 2)
                    position = 8;
            }


            if(parseInt(day) == 3){

                if(parseInt(type) == 0)
                    position = 9;

                if(parseInt(type) == 1)
                    position = 10;

                if(parseInt(type) == 2)
                    position = 11;
            }


            if(parseInt(day) == 4){

                if(parseInt(type) == 0)
                    position = 12;

                if(parseInt(type) == 1)
                    position = 13;

                if(parseInt(type) == 2)
                    position = 14;
            }


            if(parseInt(day) == 5){

                if(parseInt(type) == 0)
                    position = 15;

                if(parseInt(type) == 1)
                    position = 16;

                if(parseInt(type) == 2)
                    position = 17;
            }


            if(parseInt(day) == 6){

                if(parseInt(type) == 0)
                    position = 18;

                if(parseInt(type) == 1)
                    position = 19;

                if(parseInt(type) == 2)
                    position = 20;
            }


            return position;

        },

        urlSafeString: function(string){

            var special_chars,
                string,
                danish_chars = [/ø/g, /æ/g, /å/g],
                danish_chars_replace = ["oe", "aa", "ae"];

           string = string.toLowerCase();
            for(var i=0; i<danish_chars.length; i++){
               string = string.replace(danish_chars[i], danish_chars_replace[i]);
           }

            string = string.replace(/\s/g, "-");
            string = string.replace(/[^a-z0-9_-]/gi, '').toLowerCase()


           return string;

        },

        // showConfirm: function(message, callback){

        //     var alert = $(".confirmer"),
        //         input = $('.input', alert);

        //     input.eq(0).unbind('click').click(function(){
        //        if(callback)
        //             callback(true);

        //         alert.hide();
        //         $("#freezer").hide();
        //     });

        //     input.eq(1).unbind('click').click(function(){
        //         if(callback)
        //             callback(false);

        //         alert.hide();
        //         $("#freezer").hide();
        //     });

        //     $(".message", alert).html(message);
        //     $(".close", alert).unbind('click').click(function(){
        //         if(callback)
        //             callback(false);

        //         alert.hide();
        //         $("#freezer").hide();
        //     });

        //     alert.show();
        //     $("#freezer").show();
        // },

        setCookie: function(c_name,value,exdays) {
            var exdate=new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
            document.cookie=c_name + "=" + c_value;
        },

        getCookie: function(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++)
            {
                var c = ca[i].trim();
                if (c.indexOf(name)==0) return c.substring(name.length,c.length);
            }
            return "";
        },

        getParameterByName: function(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

    }

})(this);

$(function(){
   Norstar.init();
});