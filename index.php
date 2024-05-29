<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Digital | Rohmat & Putri</title>
    <meta property="og:title" content="Walimatul ‘Urs Rohmat dan Putri">
    <meta property="og:description" content="Walimatul ‘Urs Rohmat dan Putri">
    <meta property="og:image" content="https://tes.undangandigitalku.biz.id/public/img/thumnail-undangan800x800.webp">
    <meta property="og:url" content="https://tes.undangandigitalku.biz.id/">
    <link rel="shortcut icon" href="/public/img/thumnail-undangan.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="public/css/style.css?v=2.2 ">
</head>

<body>
    <div class="relative top-0 bottom-0 left-0 right-0 flex overflow-hidden ">
        <div class="lg:fixed lg:left-0 lg:w-[calc(100%_-_400px)] hidden lg:flex justify-center items-center ">
            <img src="/public/img/background.webp" alt="" class="w-full h-screen">
            <div class="absolute top-0 bottom-0 left-0 right-0">
                <div class="flex items-center justify-center">
                    <img src="/public/img/iconic.webp" alt="" class="h-screen">
                </div>
            </div>
        </div>


        <div class="w-[400px] min-w-[360px]  lg:fixed lg:right-0 mx-auto h-screen overflow-y-auto flex justify-center border overflow-x-hidden  bottom-0 ">
            <section class="w-full ">
                <div class="dark:bg-d-background" id="welcome">
                    <?php include('components/welcome.php'); ?>
                </div>
                <div class="relative hidden dark:bg-d-background" id="tampilan">
                    <?php include('components/timeline.php'); ?>
                    <?php include('components/pembukaan.php'); ?>
                    <?php include('components/savedate.php'); ?>
                    <?php include('components/loveStory.php'); ?>
                    <?php include('components/pesan.php'); ?>
                    <?php include('components/kotakPesan.php'); ?>
                    <?php include('components/gift.php'); ?>
                    <?php include('components/footer.php'); ?>

                    <div class="size-[59px] rounded-full right-8 z-[100]  bg-timeline flex justify-center items-center fixed bottom-10 animate-pulse border-timeline border-4">
                        <div class="flex items-center justify-center bg-white rounded-full cursor-pointer size-8" onclick="playPause()">
                            <img src="/public/icons/pause.svg" alt="" srcset="" class="show" id="pause-music">
                            <img src="/public/icons/play.svg" alt="" srcset="" class="hidden" id="play-music">
                        </div>
                    </div>

                    <audio controls id="music-on" class="hidden" loop="true">
                        <source src="/public/mp3/Video Undangan Pernikahan Digital Fathna & Fauzan.mp3" type="audio/mp3">
                    </audio>
                </div>
            </section>
        </div>

    </div>


    <script src="public/js/main.js"></script>

</body>

</html>