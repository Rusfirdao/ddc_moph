<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="./assets/img/logo_web.png" />
    <title>ddc_moph_dashboard</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />


</head>

<body>
   
    <div id="container">
        <!-- content -->
        <div id="html-template">
            <?php require_once __DIR__ . '/pages/dashboard.php'; ?>
        </div>

        <!-- button to download pdf -->
        <!-- <div class="link-container">
            <button class="btn-generate" onclick="HTMLToPDF()">Genrate PDF</button>
        </div> -->
    </div>

</body>
</html>