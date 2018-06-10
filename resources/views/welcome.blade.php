<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div id="app"></div>
    </div>
    <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
            ]); ?>
    </script>
    <script src="/js/app.js"></script>
</body>
</html>