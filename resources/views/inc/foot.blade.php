<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    $(document).ready(function(){
        var vp_height = $(window).height();
        $('.site-wrapper').css({"height":vp_height.toString()});
    });

    CKEDITOR.replace( 'article-ckeditor' );
</script>

</body>
</html>