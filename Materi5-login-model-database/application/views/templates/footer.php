<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= LOCAL;?>/CDN/js/jquery.min.js"></script>
<script src="<?= LOCAL;?>/CDN/js/popper.min.js"></script>
<script src="<?= LOCAL;?>/CDN/js/bootstrap.min.js"></script>

<!-- Then Material JavaScript on top of Bootstrap JavaScript -->
<script src="<?= LOCAL;?>/CDN/js/material.min.js">
</script>
<script type="text/javascript">
    if ($('input#customCheck').checked) {
        $('input#reg').removeClass('disabled');
        console.log('test');
    }
</script>
<script src="<?= LOCAL;?>/CDN/js/script.js">
</script>
</body>
