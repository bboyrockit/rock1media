<script type="text/javascript">
    window._nsl.push(function ($) {
        $(document).ready(function () {
            var $container = $('#');
            $container.find('.nsl-container')
                .addClass('nsl-container-embedded-login-layout-below')
                .css('display', 'block');

            $container
                .appendTo($container.closest('form'));
        });
    });
</script>
<style type="text/css">
    
    # .nsl-container {
        display: none;
    }

    # .nsl-container-login-layout-below {
        clear: both;
        padding: 20px 0 0;
    }

    .login form {
        padding-bottom: 20px;
    }</style>
<noscript>
    <style type="text/css">
        
    # .nsl-container {
        display: block;
    }    </style>
</noscript>