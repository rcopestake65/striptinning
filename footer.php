</div>
<!--end .container-->
<?php if(is_active_sidebar('page-sidebar')):?>
<div class="footer-container">
    <div class="container">
        <?php dynamic_sidebar('page-footer');?>
    </div>
</div>
<?php endif;?>

<?php wp_footer();?>
</body>

</html>