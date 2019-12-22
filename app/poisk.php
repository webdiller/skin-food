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




    <main class="main main--search">
        <div class="main__wrapper">

            <div class="search">
                <div class="search__wrapper">
                    <div class="search__head">
                        <p class="search__title">результаты поиска</p>
                        <p class="search__result">Запрос «qwerty». Найдено 0 товаров</p>
                    </div>
                    <div class="search__body">
                        <p class="search__description">
                            По данным параметрам товаров не найдено
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