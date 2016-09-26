var extendedmenuReisezieleItems = {  "fr": [
                                {"image":"assets/images/nav-france-demo0.png","txt":"Frankreich is voll nice und so"},
                                {"image":"assets/images/nav-france-demo1.png","txt":"Burgund in Frankreich is voll nice und so"},
                                {"image":"assets/images/nav-france-demo2.png","txt":"Languedoc in Frankreich is voll nice und so"}
                            ],
                            "de": [
                                {"image":"assets/images/nav-france-demo0.png","txt":"Deutschland is voll nice und so"},
                                {"image":"assets/images/nav-france-demo1.png","txt":"Berlin in Deutschland is voll nice und so"},
                                {"image":"assets/images/nav-france-demo2.png","txt":"Baden-Württemberg in Deutschland is voll nice und so"},
                                {"image":"assets/images/nav-france-demo2.png","txt":"Schleswig-Holstein in Deutschland is voll nice und so"}
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
        $("img[usemap='#"+$(this).parent().attr("name")+"']").attr("src", $(this).attr("data-src-target"));
        $(this).parent().siblings(".output").css({"top":$(this).attr("data-title-cord-y")+"%", "left": $(this).attr("data-title-cord-x")+"%"}).text($(this).attr("alt")).show(260);
    }).mouseleave(function(){
        $("img[usemap='#"+$(this).parent().attr("name")+"']").attr("src", $(this).parent().attr("data-src-default"));
        $(this).parent().siblings(".output").text("").hide(260);
    });
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
        $('#Reisethemen .markImage').attr("src",extendedmenuReisethemenItems[$(this).attr("data-id")].image);
        $('#Reisethemen .markTxt').html(extendedmenuReisethemenItems[$(this).attr("data-id")].txt);
    });
}