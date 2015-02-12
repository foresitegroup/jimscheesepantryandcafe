                </div><!-- #content-->                          
                        
                <div id="copyright">
                        <div id="copyright-text" class="small">
                        &copy;
                        <?php $the_year = date("Y"); echo $the_year; ?>
                        
                        <?php
                        if ( of_get_option('gg_copyright') ) {
                                echo(of_get_option('gg_copyright'));
                        } else {
                        ?>
                                
                                <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.', 'gxg_textdomain') ?>
                        <?php       
                        }
                        ?>                           
                        
                        </div>
                </div><!-- #copyright -->  
	
        </div><!-- #contentwrap-->        

</div><!-- #wrapper -->

</div><!-- #bg-image -->

<?php 
if ( of_get_option('gg_bg_image_custom') && of_get_option('gg_bg_position') == 'stretched' ) {
?>
       <script type="text/javascript">jQuery.backstretch("<?php echo of_get_option('gg_bg_image_custom'); ?>");</script>
<?php
}
?>

<?php wp_footer();  ?>

</body>

</html>