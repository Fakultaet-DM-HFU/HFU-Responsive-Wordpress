        <nav id="footernav">
            <?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
        </nav>

        <aside>
            <img id="claim" src="<?php echo(get_template_directory_uri()); ?>/HFU_Claim_engl_CMYK_RZ.png">
        </aside>
    </div>

</div>


<?php wp_footer(); ?> <!-- For PlugIns -->

<?php
    include_once "tracking.php";
?>

</html>