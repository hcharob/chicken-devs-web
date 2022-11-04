<?php
    /**
     * Template Name: main-nav
     * 
     * @package WordPress
     * @subpackage cidw-4w4
     */
?>
             <input type="checkbox"  id="chk-burger">
                <label for="chk-burger" id="burger" class="burger">
                    <div class="burger__ligne"></div>
                    <div class="burger__ligne"></div>
                    <div class="burger__ligne"></div>
                </label>
            <?php
                wp_nav_menu(array("menu"=>"principal", "container" => "nav"));
            ?>