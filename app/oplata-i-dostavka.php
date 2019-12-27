<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#fff">
    <title>Skin Food</title>
    <style>
        body {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
</head>

<body id="bodySelector" class="body-container">


    <!-- modals -->
    <?php include 'components/modals/region-modal.php';?>
    <?php include 'components/modals/user-modal.php';?>


    <!-- components -->
    <?php include 'components/region.php';?>
    <?php include 'components/header.php';?>
    <?php include 'components/navigation.php';?>




    <main class="main main--payment-delivery">
        <div class="main__wrapper">

            <div class="payment-delivery">
                <div class="payment-delivery__wrapper">
                    <div class="payment-delivery__head">
                        <p class="payment-delivery__title">ДОСТАВКА И ОПЛАТА</p>
                    </div>
                    <div class="payment-delivery__body">
                        <p class="payment-delivery__description">
                            
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </main>


    <?php include 'components/footer.php';?>

    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>
</body>

</html>