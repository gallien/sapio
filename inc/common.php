<?php
  /*

    function getMenu($lang,$page,$side,$mobile=false){
        global $menu;
        $return = "";
        foreach($menu[$lang][$side] as $key => $val){
            $li_class = '';
            $a_class = '';
            if($page==$key){ $li_class = 'active'; };
            if($key=="register" && !$mobile){ $a_class = 'waves-effect waves-light btn-large blue'; };
            $return .= '<li class="'.$li_class.'"><a href="/'.$lang.'/'.$key.'" class="'.$a_class.'">'.$val.'</a></li>';
        };
        return $return;
    };

    function syncery_header($params = array()) {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        if(isset($lang)){ if(empty($lang)){ $lang = "de"; }; }else{ $lang = "de"; };
        include("header.inc.php");
    }

    function syncery_footer($params = array())
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        include('footer.inc.php');
    }

    function syncery_blog_aside(){
        echo '<div class="input-field">
                    <i class="material-icons prefix">search</i>
                    <input type="search" id="search" name="search" class="validate" required maxlength="36" />
                    <label for="search">Suche</label>
                </div>
                <br/>
                <br/>
                <header><h5>Themen</h5></header>
                <ul>
                    <li><a href="#" class="transform-inherit">Lorem ipsum (4)</a></li>
                    <li><a href="#" class="transform-inherit">Dolor sit amet (14)</a></li>
                    <li><a href="#" class="transform-inherit">Consectetuer adipiscing (3)</a></li>
                    <li><a href="#" class="transform-inherit">Aenean commodo (23)</a></li>
                </ul>
                <br/>
                <br/>
                <header><h5>Archiv</h5></header>
                <ul>
                    <li><a href="#" class="transform-inherit">Januar 2016 (4)</a></li>
                    <li><a href="#" class="transform-inherit">Februar 2016 (14)</a></li>
                    <li><a href="#" class="transform-inherit">März (3)</a></li>
                    <li><a href="#" class="transform-inherit">April (23)</a></li>
                    <li><a href="#" class="transform-inherit">März (3)</a></li>
                    <li><a href="#" class="transform-inherit">Mai (3)</a></li>
                    <li><a href="#" class="transform-inherit">Juni (3)</a></li>
                    <li><a href="#" class="transform-inherit">Juli (3)</a></li>
                </ul>';
    };

    if(isset($_GET["getPartners"])){
        $result = array();
        $result[0] = array("image"=>"mobile-phone-1419275_640.jpg", "title"=>"FeWo-direkt", "object_num"=>123.456, "region"=>"Ostsee/ Sachsen-Anhalt", "content"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.");
        $result[1] = array("image"=>"mobile-phone-1419275_640.jpg", "title"=>"Travel24", "object_num"=>987.234, "region"=>"Nordsee/ Baden-Württemberg", "content"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.");
        $result[2] = array("image"=>"mobile-phone-1419275_640.jpg", "title"=>"Ferienwohnungen.de", "object_num"=>376.234, "region"=>"Bayern", "content"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.");
        echo json_encode($result);
        exit();
    };
*/
?>