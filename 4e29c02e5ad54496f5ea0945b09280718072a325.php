<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Citybook -Directory Listing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/css/reset.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/css/plugins.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/css/color.css')); ?>">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="pin"></div>
    <div class="pulse"></div>
</div>
<!--loader end-->
<!-- Main  -->
<div id="main">
    <?php echo $__env->make('parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('parts.register_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a class="to-top"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
</body>
</html>

<?php /**PATH C:\Users\Faradars\ads\resources\views/layout/base.blade.php ENDPATH**/ ?>