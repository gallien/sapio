var extendedmenuReisezieleItems = {  "fr": [
                                {"txt":"Frankreich"},
                                {"txt":"Burgund"},
                                {"txt":"Languedoc"}
                            ],
                            "de": [
                                {"txt":"Deutschland"},
                                {"txt":"Baden-Württemberg"},
                                {"txt":"Berlin"},
                                {"txt":"Schleswig-Holstein"}
                            ],
                            "it": [
                                {"txt":"Italien"},
                                {"txt":"Abruzzen"},
                                {"txt":"Apulien"},
                                {"txt":"Aeolische Inseln"},
                                {"txt":"Emilia-Romagna"},
                                {"txt":"Friaul Julisch Venetien"},
                                {"txt":"Latium"},
                                {"txt":"Kalabrien"},
                                {"txt":"Kampanien"},
                                {"txt":"Ligurien"},
                                {"txt":"Lombardei"},
                                {"txt":"Piemont"},
                                {"txt":"Sardinien"},
                                {"txt":"Sizilien"},
                                {"txt":"Trentino-Südtirol"},
                                {"txt":"Südtoskana"},
                                {"txt":"Toskana"},
                                {"txt":"Trentino-Südtirol"},
                                {"txt":"Venetien"}
                            ]
                        };
var extendedmenuReisethemenItems = [
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Weinreisen"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Kochreisen"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Genusswandern"},
                                {"image":"https://dummyimage.com/285x188/cccccc/000000.png&text=dummy","txt":"Trüffelreisen"},
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
    $(".footer-include").load("inc/footer.inc.html", function(){
        $("img[usemap]").rwdImageMaps();
        getImagemapListener();
    });
    $(".aside-contact-include").load("inc/aside-contact.inc.html", function(){
        $("#sidecontent>section").first().clone().appendTo("#aside-include");
    });
    $(".aside-newsletter-include").load("inc/aside-newsletter.inc.html");
    $("#headerslider").carousel({interval:6000});
    $("#reiseleiterslider").carousel({interval:4000});
    $("#reisedetailbilderslider").carousel({interval:8000});
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
        markHeadingOfListHoverHelper($(this));
    }).mouseleave(function(){
        markHeadingOfListUnhoverHelper($(this));
    });
    $("map").each(function(){
        if($(this).attr("data-area-default")){
            getImagemapDefault($(this), $(this).attr("data-parentboxid"));
        };
    });
};

function getImagemapDefault(el, parentbox){
    $("#"+parentbox+" img[usemap='#"+el.attr("name")+"']").attr("src", el.attr("data-src-default"));
    if(el.attr("data-area-default")){
        var area = el.find("area[alt='"+el.attr("data-area-default")+"']");
        $("#"+parentbox+" .output").css({"top": area.attr("data-title-cord-y")+"%", "left": area.attr("data-title-cord-x")+"%"}).text(area.attr("alt")).show();
    }else{
        $("#"+parentbox+" .output").text("").hide();
    };
};

function getExtendedmenu() {
    if ($(window).width() > 767) {
        $("#mainnavlinks a").mouseenter(function() {
            var el = $(this);
            if ($('#mainnavlinks a.active').attr('data-target') != el.attr('data-target')) {
	            openExtendetMenu(el);
	            $("main").hover(function(){
	                closeExtendetMenu(el);
	            });
	        }
        });
        $("#mainnavlinks a").click(function(e) {
        	e.preventDefault();
            var el = $(this);
            if ($('#mainnavlinks a.active').attr('data-target') != el.attr('data-target')) {
	            openExtendetMenu(el);
	            $("main").hover(function(){
	                closeExtendetMenu(el);
	            });
	        }
        });
    } else {
        $("#mainnavlinks .dropdown-toggle").click(function(e) {
        	e.preventDefault();
        	$(this).parent().find('ul').slideToggle();
        });
    };
    $("#Reiseziele .markHeadingOfList a").hover(function(){
        markHeadingOfListHoverHelper($(this));
    }, function(){
        markHeadingOfListUnhoverHelper($(this));
    });
    $("#Reisethemen .markHeadingOfList a").hover(function(){
        $("#Reisethemen .markTxt").html(extendedmenuReisethemenItems[$(this).attr("data-id")].txt);
    });
    $("#Reiseziele .getimgmaplistsele").hover(function(){
        $("#Reiseziele img[usemap]").hide();
        $("#Reiseziele img[usemap='#"+$(this).attr("data-map")+"']").show();
    });
};

function openExtendetMenu(el){
    $(".extendedmenu").slideUp();
    $("#mainnavlinks a").removeClass("active");
    el.addClass("active");
    $(el.attr("data-target")).slideDown();
    $("img[usemap]").rwdImageMaps();
};

function closeExtendetMenu(el){
    $(".extendedmenu").slideUp();
    el.removeClass("active");
    $(el.attr("data-target")).slideUp();
};

function markHeadingOfListHoverHelper(el){
    var id = el.attr("data-id");
    var parentbox = el.parent().attr("data-parentboxid");
    var tmp = id.split("-");
    if($("#"+parentbox+" .markHeadingOfList a[data-id='"+id+"']").length>0){
        $("#"+parentbox+" .markHeadingOfList a[data-id='"+id+"']").addClass("red-text");
        $("#"+parentbox+" .getimgmaplistsele[data-map='map_"+tmp[0]+"'] h6>a").addClass("red-text");
        $("#"+parentbox+" .markTxt").html(extendedmenuReisezieleItems[tmp[0]][tmp[1]].txt);
    };
    var area = $("area[data-id='"+id+"']");
    if(area.length>0){
        $("#"+parentbox+" img[usemap='#map_"+tmp[0]+"']").attr("src", area.attr("data-src-target"));
        $("#"+parentbox+" .output").css({"top": area.attr("data-title-cord-y")+"%", "left": area.attr("data-title-cord-x")+"%"}).text(area.attr("alt")).show();
    }else{
        $("#"+parentbox+" img[usemap='#map_"+tmp[0]+"']").attr("src", $("map[name='map_"+tmp[0]+"']").attr("data-src-default"));
    };
};

function markHeadingOfListUnhoverHelper(el){
    var id = el.attr("data-id");
    var parentbox = el.parent().attr("data-parentboxid");
    var tmp = id.split("-");
    $("#"+parentbox+" .markHeadingOfList a[data-id='"+id+"']").removeClass("red-text");
    $("#"+parentbox+" .getimgmaplistsele[data-map='map_"+tmp[0]+"'] h6>a").removeClass("red-text");
    getImagemapDefault(el.parent(), parentbox);
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