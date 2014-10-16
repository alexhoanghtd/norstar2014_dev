var _track_cat = 'read_catalogue';
(function(window) {

    var Norstar = window.Norstar;

    Norstar.Views.Catalogue = function() {};

    Norstar.Views.Catalogue.prototype = {

        initIPaper : function(){
            
            var that = this,
                $ipaper = $(".ipaper-overlay");

            $(window).resize(function(){
                that.setScreen();
            });

            this.setScreen();

            $("#freezer").click(function(e){
                that.hidePaper();
            });

            $('.close', $ipaper).click(function(){
               that.hidePaper();
            });

            Norstar.Session.catalogueUrl = $.trim(Norstar.Session.catalogueUrl);

            if(Norstar.Session.catalogueUrl && Norstar.Session.catalogueUrl != ""){

                var checkForPage = Norstar.Session.catalogueUrl.split("/"),
                    last = checkForPage[checkForPage.length - 1],
                    url = "";

                if(!isNaN(last)){

                    checkForPage.splice(checkForPage.length - 1 , 1);
                    for(var i=0; i < checkForPage.length; i++){
                        url += checkForPage[i] + "/";
                   }

                    url += "?page=" + last;

                } else {
                    url  = Norstar.Session.catalogueUrl;
                }

                url = "http://norstar.dk/" + $.trim(url);
                that.showPaper(url);
            }
        },


        init: function() {

            var that = this,
                $links = $("a[rel='overlay']");

            $links.each(function(){
                var $this = $(this),
                url = $this.attr("href");
                $this.click(function(e){
                    that.showPaper(url);
                    return false;
                });
            });

            $('.single-view-button').click(function(){
                $this = $(this);

                setTimeout(function(){
                    window.location.href = $this.attr('href');
                }, 100);

               return false;
            });

            if (Norstar.Utils.getParameterByName("current"))
                this.showPaper($links.eq(0).attr("href"));

            this.initIPaper();
            this.initAddOverlay();
        },


        initAddOverlay: function(){

            var that = this,
                $dom = $(".shopping-list-add-to"),
                $m = $(".measure", $dom),
                $a = $(".amount", $dom),
                $c = $(".category", $dom),
                $n = $("#addToShoppinglistName", $dom),
                $list = $("#shoppinglist-select"),
                $listname = $('#createNewShoppingListName');

            $.ajax({
                url: Norstar.Session.baseUrl + 'shoppinglists/get_shoppinglists',
                dataType: 'json',
                type: 'POST',
                data: {},
                success: function(response){

                    if(!response)
                        return;

                    var shoppinglistS = $("#shoppinglist-select");

                    for(var i=0;i < response.length; i++){
                        if(response.length == 1)
                            shoppinglistS.append('<option value="'+response[i].location+'" selected="selected">'+response[i].name+'</option>');
                        else
                            shoppinglistS.append('<option value="'+response[i].location+'">'+response[i].name+'</option>');
                    }
                    if(response.length == 0 || response.length == undefined) {
                        $listname.val('Min indkøbsliste');
                        $('#createNewShoppingList').show();
                        $list.hide();
                    }
                }
            });

            $.ajax({
                url: Norstar.Session.baseUrl + 'shoppinglist/get_categories',
                dataType: 'json',
                type: 'POST',
                data: {},
                success: function(response){

                    if(!response)
                        return;

                    var shoppinglistS = $(".category");

                    for(var i=0;i < response.length; i++){
                        shoppinglistS.append('<option value="'+response[i].categories[0]+'">'+response[i].title+'</option>');
                    }
                }
            });


            $(".shopping-list-add-to .close, #freezer").click(function(){

                if($(".shopping-list-add-to").is(":visible")){
                    that.hideAddToOverlay();
                }
            });

            $(".foodplan-button").click(function(){
                that.showAddToOverlay();
            });

            $(".shopping-list-add-to .button").click(function(){

                var errorMsg = "";

                if($.trim($n.val()) == "" || $.trim($n.val()) == "Indtast navn"){
                    errorMsg = "- Du skal udfylde et navn. <br />";
                }

                if($.trim($a.val()) == ""){
                    errorMsg += "- Du skal udfylde en mængde. <br />";
                }

                if($.trim($m.val()) == ""){
                    errorMsg += "- Du skal udfylde en mængdetype. <br />";
                }

                if($.trim($c.val()) == ""){
                    $c.val("1082");
                  //  errorMsg += "- Du skal udfylde en kategori. <br />";
                }

                if($list.is(":visible") && $.trim($list.val()) == ""){
                    errorMsg += "- Du skal vælge en indkøbsliste. <br />";
                }

                if($listname.is(":visible") && $listname.val() == $listname.data('placeholder')) {
                    errorMsg += "- Du skal skrive navnet på din indkøbsliste. <br />";
                }

                if(errorMsg != ""){
                    Norstar.Utils.showAlert(errorMsg, true);
                    return;
                }

                that.hideAddToOverlay();

                var data = {
                    url : $.trim($list.val()) != "" ? $list.val() + "/products" : $listname.val(),
                    product: {
                        amount:$a.val(),
                        measurement:$m.val(),
                        category_id:$c.val(),
                        name:$.trim($n.val())
                    }
                };

                $.ajax({
                    url: Norstar.Session.baseUrl + 'shoppinglist/add_shoppinglist_item',
                    dataType: 'json',
                    type: 'POST',
                    data: data,
                    success: function(response){

                        if(response && !response.error && !response.errors){

                            Norstar.Utils.showAlert("Du har tilføjet en ny vare.", true);

                        } else {
                            Norstar.Utils.showAlert("Der skete en uventet fejl", true);
                        }

                        $.ajax({
                            url: Norstar.Session.baseUrl + 'shoppinglists/get_shoppinglists',
                            dataType: 'json',
                            type: 'POST',
                            data: {},
                            success: function(response){
                                if(!response)
                                    return;
                                $list.empty();
                                $list.append('<option value="">Vælg en indkøbsliste</option>');
                                for(var i=0;i < response.length; i++){
                                    if(response.length == 1)
                                        $list.append('<option value="'+response[i].location+'" selected="selected">'+response[i].name+'</option>');
                                    else
                                        $list.append('<option value="'+response[i].location+'">'+response[i].name+'</option>');
                                }
                                if(response.length == 0 || response.length == undefined) {
                                    $listname.val('Min indkøbsliste');
                                    $('#createNewShoppingList').show();
                                    $list.hide();
                                } else {
                                    $listname.val('');
                                    $('#createNewShoppingList').hide();
                                    $list.show();
                                }
                            }
                        });
                    }
                });

            });
        },


        hideAddToOverlay: function(){

            $(".shopping-list-add-to").hide();
            $("#freezer").hide();

        },

        showAddToOverlay: function(data){


            var $dom = $(".shopping-list-add-to"),
                $m = $(".measure", $dom),
                $a = $(".amount", $dom),
                $n = $("#addToShoppinglistName", $dom),
                cat = 1082,
                id = 0,
                $c = $(".category", $dom);

            $c.val("1082");

            if(data.title)
                $n.val(data.title);

            if(data.productID){
                if(data.productID.indexOf(";") != -1){
                    data.productID = data.productID.split(";");
                    id = data.productID[1];
                }
            }

            $.ajax({
                url: Norstar.Session.baseUrl + 'category_id_to_id',
                dataType: 'json',
                type: 'POST',
                data: {id: id},
                success: function(response){
                    if(response && response.id){
                        $c.val(response.id);
                    }
                }
            });

            $(".shopping-list-add-to").show();
            $("#freezer").show();

            $a.val("1");
            $m.val("stk");
        },


        showPaper: function(url){

            var that = this,
                $ipaper = $(".ipaper-overlay");

            if(url && url != ""){
                $ipaper.find('iframe').attr("src", url);
                $("#freezer").show();
                $ipaper.show();
            } else {
                alert("Der var et problem med, at vise tilbudsavisen.");
            }

        },

        hidePaper: function(){
            var that = this,
                $ipaper = $(".ipaper-overlay");
            $('iframe', $ipaper).attr("src", "");
            $("#freezer").hide();
            $ipaper.hide();
        },

        setScreen: function(){

            var $ipaper = $(".ipaper-overlay");

            $ipaper.css({ width: ($(window).width() - 80), height: ($(window).height() - 80) });
            $ipaper.find('.ipaper-content').css({ width: ($(window).width() - 80), height: ($(window).height() - 80) });
            $ipaper.find('iframe').css({ width: ($(window).width() - 80), height: ($(window).height() - 80) });
        }

    };

})(this);


$(function(){
    Norstar.Views.Catalogue.prototype.init();
});

document.domain = 'localhost:8081';

function iPaperInit(api) {
    api.Shop.addEventListener("addItem", function(data) {
        alert(data);
//        Norstar.Views.Catalogue.prototype.showAddToOverlay(data);
    });
}