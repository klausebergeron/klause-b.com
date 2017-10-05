<?php


function showHeadbar($page)
{
	echo "
   <div class='header' role='banner'>
            <div class='container'>
                <table class='top' style='width:100%; z-index: 99;'>
                    <tr>
                        <td style='width:44px;'>
                            <form action='../index.html'>
                                <input type='image' src='../logos_buttons/klause-b-stencil-logo8.png' class='stencilLogo'>
                            </form>
                        </td>
                        <td>
                            <name style='font-family: Caveat; font-size: 18pt;'>claudia bergeron</name>
                        </td>
                        <td>
                            <ul style='margin-left:200px; font-family: Barrio;'>";
                            if($page == 'websites') {formatting('websites');}
                            else {echo "<li><a href='http://klause-b.com/websitespg.php'>websites</a></li>";}
                            if($page == 'art') {formatting('art');}
                            else {echo "<li><a href='http://klause-b.com/artpg.php'>art</a></li>";}
                            if($page =='research') {formatting('research');}
                            else {echo "<li><a href='http://klause-b.com/researchpg.php'>research</a></li>";}
                            if($page == 'writing') {formatting('writing');}
                            else {echo "<li><a href='http://klause-b.com/writingpg.php'>writing</a></li>";}
                            if($page == 'programs') {formatting('programs');}
                            else {echo "<li><a href='http://klause-b.com/programspg.php'>programs</a></li>";}
                            
                            echo"
                            </ul>
                        </td>
                </table>
            </div><!-- end container (topBar.css) centered part of header -->
        </div> <!-- end header (topBar.css) -->";
};



function formatting($pg)
{
    echo "<li style='font-size:18; border-bottom-style:solid; border-bottom-width: 1px; border-color=grey;'><a style='color:white;' href='http://klause-b.com/".$pg."pg.php'>".$pg."</a></li>";
};

?>