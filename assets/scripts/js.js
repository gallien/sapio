var extendedmenuReisezieleItems = {  "fr": [
                                {"image":"assets/images/maps/map-france-default.png","txt":"Frankreich is voll nice und so"},
                                {"image":"assets/images/maps/map-france-burgund.png","txt":"Burgund in Frankreich is voll nice und so"},
                                {"image":"assets/images/maps/map-france-languedoc.png","txt":"Languedoc in Frankreich is voll nice und so"}
                            ],
                            "de": [
                                {"image":"assets/images/maps/map-germany-default.png","txt":"Deutschland is voll nice und so"},
                                {"image":"assets/images/maps/map-germany-badenwuetrtemberg.png","txt":"Baden-Württemberg in Deutschland is voll nice und so"},
                                {"image":"assets/images/maps/map-germany-berlin.png","txt":"Berlin in Deutschland is voll nice und so"},
                                {"image":"assets/images/maps/map-germany-schleswigholstein.png","txt":"Schleswig-Holstein in Deutschland is voll nice und so"}
                            ],
                            "it": [
                                {"image":"assets/images/maps/map-italy-default.png","txt":"Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-abruzzen.png","txt":"abruzzen in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-apulien.png","txt":"apulien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-aeolischeinseln.png","txt":"aeolischeinseln in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-emiliaromagna.png","txt":"emiliaromagna in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-friauljulischvenetien.png","txt":"friauljulischvenetien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-latium.png","txt":"latium in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-kalabrien.png","txt":"kalabrien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-kampanien.png","txt":"kampanien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-ligurien.png","txt":"ligurien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-lombardei.png","txt":"lombardei in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-piemont.png","txt":"piemont in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-sardinien.png","txt":"sardinien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-sizilien.png","txt":"sizilien in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-trentinosuedtirol.png","txt":"Trentino-Südtirol in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-toskana.png","txt":"Südtoskana in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-toskana.png","txt":"toskana in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-trentinosuedtirol.png","txt":"trentinosuedtirol in Italien is voll nice und so"},
                                {"image":"assets/images/maps/map-italy-venetien.png","txt":"venetien in Italien is voll nice und so"}
                            ]
                        };
var extendedmenuReisethemenItems = [
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Weinreisen sind toll"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Kochreisen sind soll"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Genusswandern ist auch toll"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Trüffelreisen sind trüffeltastisch"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Kulinarische Städtereisen"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Kulinarik & Kunst"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Vegetarische Reisen"}
                            ];

$(document).ready(function(){
    $(".header-include").load("inc/header.inc.html", function(){
        getExtendedmenu();
    });
    $(".fintravelbox").load("inc/fintravelbox.inc.html");
    $("#buchungsanfragemodal").load("inc/buchungsanfragemodal.inc.html", function(){
        $("#buchungsanfragemodal_mytravel select").change(function(){
            updateSelectOutputBoxes($(this));
        });
        updateSelectOutputBoxes($("#buchungsanfragemodal_mytravel select"));
        $("#buchungsanfragemodal_mydata select, #buchungsanfragemodal_mydata input, #buchungsanfragemodal_mydata textarea").blur(function(){
            updateInputOutputBoxes($(this));
        });
        updateInputOutputBoxes($("#buchungsanfragemodal_mydata select, #buchungsanfragemodal_mydata input, #buchungsanfragemodal_mydata textarea"));
    });
    $(".footer-include").load("inc/footer.inc.html");
    $(".aside-contact-include").load("inc/aside-contact.inc.html", function(){
        $("#sidecontent>section").first().clone().appendTo("#aside-include");
    });
    $(".aside-newsletter-include").load("inc/aside-newsletter.inc.html");
    $("#headerslider").carousel({interval:6000});
    $("#reiseleiterslider").carousel({interval:4000});
    $("#reisedetailbilderslider").carousel({interval:8000});
    $("img[usemap]").rwdImageMaps();
    getImagemapListener();
});

function updateSelectOutputBoxes(element){
    element.each(function(index, el){
        el = $(el);
        if(el.val()!="" && el.val()!=undefined){
            var tmp = el.find("option:selected").text();
            if(el.attr("id").search("add_option")>0){ tmp = tmp+"x "+el.parent().parent().find("p").html(); };
            tmp = tmp.split(" - ")[0];
            $("."+el.attr("id")+"-output").html(tmp);
            if(el.find("option:selected").attr('data-price')){
                $("."+el.attr("id")+"-price").html(parseInt(el.find("option:selected").attr("data-price")).toLocaleString()+" &euro;");
            };
        };
    });
    var price = 0;
    $("#buchungsanfragemodal_mytravel select option:selected[data-price]").each(function(index, el){
        price += parseInt($(el).attr("data-price"));
    });
    $(".travel-price").html(price.toLocaleString()+" &euro;");
};

function updateInputOutputBoxes(element){
    element.each(function(index, el){
        el = $(el);
        if(el.val()!="" && el.val()!=undefined){
            $("."+el.attr("id")+"-output").html(el.val());
        };
    });
};

function getImagemapListener(){
    $("map>area").mouseenter(function(){
        $(this).parent().parent().find("img[usemap='#"+$(this).parent().attr("name")+"']").attr("src", $(this).attr("data-src-target"));
        $(this).parent().siblings(".output").css({"top":$(this).attr("data-title-cord-y")+"%", "left": $(this).attr("data-title-cord-x")+"%"}).text($(this).attr("alt")).show(260);
    }).mouseleave(function(){
        getImagemapDefault($(this));
    });
    $("map>area").each(function(){
        getImagemapDefault($(this));
    });
};

function getImagemapDefault(el){
    el.parent().parent().find("img[usemap='#"+el.parent().attr("name")+"']").attr("src", el.parent().attr("data-src-default"));
    if(el.parent().attr("data-area-default")){
        var area = el.parent().find("area[alt='"+el.parent().attr("data-area-default")+"']");
        el.parent().siblings(".output").css({"top": area.attr("data-title-cord-y")+"%", "left": area.attr("data-title-cord-x")+"%"}).text(area.attr("alt")).show(260);
    }else{
        el.parent().siblings(".output").text("").hide(260);
    };
};

function getExtendedmenu(){
    if($(window).width()>768){
        $("#mainnavlinks a").click(function(){
            var el = $(this), target = $(this).attr("data-target");
            if(el.hasClass("active")){
                el.removeClass("active");
                $(target).slideUp();
            }else{
                $(".extendedmenu").slideUp();
                $("#mainnavlinks a").removeClass("active");
                el.addClass("active");
                $(target).slideDown();
                $("main").click(function(){
                    $(".extendedmenu").slideUp();
                    el.removeClass("active");
                    $(target).slideUp();
                });
            };
            return false;
        });
    };

    $("#Reiseziele .markHeadingOfList a").hover(function(){
        $($(this).attr("data-parent")).css('color','#802629');
        if($(this).attr("data-id")!=undefined){
            var tmp = $(this).attr("data-id").split("-");
            $('#Reiseziele .markImage').attr("src",extendedmenuReisezieleItems[tmp[0]][tmp[1]].image);
            $('#Reiseziele .markTxt').html(extendedmenuReisezieleItems[tmp[0]][tmp[1]].txt);
        };
    }, function(){
        $($(this).attr("data-parent")).css('color','inherit');
    });

    $("#Reisethemen .markHeadingOfList a").hover(function(){
        $("#Reisethemen .markImage").attr("src",extendedmenuReisethemenItems[$(this).attr("data-id")].image);
        $("#Reisethemen .markTxt").html(extendedmenuReisethemenItems[$(this).attr("data-id")].txt);
    });
};

function checkSection(section_id,next_tab_num){
    $("#"+section_id).validator("validate");
    var num_of_err = $("#"+section_id+" .has-error").not("#"+section_id+" .iactv .has-error").length;
    if(num_of_err==0){
        $(".nav-tabs a:eq("+next_tab_num+")").tab("show").parent().removeClass("disabled");
        $("#"+section_id+" .errorbox").hide();
    }else{
        $(".nav-tabs a:eq("+next_tab_num+")").parent().addClass("disabled");
        $("#"+section_id+" .errorbox").show();
        var tmp = "";
        $("#"+section_id+" .has-error").not("#"+section_id+" .iactv .has-error").each(function(){
            if($(this).find("label")){
                tmp += '"'+$(this).find("label").text().replace("*","").replace(":","")+'", ';
            };
        });
        $("#"+section_id+" .errorbox span").html(tmp.slice(0,tmp.length-2));
    };
    $(".nav-tabs>li:not(.disabled)").click(function(e){
        e.preventDefault();
        //checkSection($(this).find("a").attr("aria-controls"),next_tab_num);
        $(this).find("a").tab("show");
    });
};