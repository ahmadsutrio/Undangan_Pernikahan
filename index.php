<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Digital | Rohmat & Putri</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="flex relative overflow-hidden top-0 left-0 right-0 bottom-0 ">
        <div class="fixed left-0 w-[calc(100%_-_400px)] hidden  lg:flex justify-center items-center ">
            <img src="/public/img/background.webp" alt="" class="w-full h-screen">

            <div class="absolute top-0 left-0 right-0 bottom-0">
                <div class="flex justify-center items-center">
                    <img src="/public/img/iconic.webp" alt="" class="h-screen">
                </div>
            </div>

        </div>
        <div class="w-[400px] lg:fixed lg:right-0 md:mx-auto h-screen overflow-y-auto border overflow-x-hidden  bottom-0 ">
            <section class="max-w-[400px] min-w-[360px]   ">
                <div class="" id="welcome">
                    <?php include('components/welcome.php'); ?>
                </div>
                <div class="hidden relative" id="tampilan">
                    <?php include('components/timeline.php'); ?>
                    <?php include('components/savedate.php'); ?>
                    <?php include('components/pesan.php'); ?>
                    <?php include('components/kotakPesan.php'); ?>
                    <?php include('components/gift.php'); ?>
                    <?php include('components/footer.php'); ?>

                    <div class="size-[59px] rounded-full right-8 z-[100]  bg-timeline flex justify-center items-center fixed bottom-10 animate-pulse border-timeline border-4">
                        <div class="bg-white size-8 rounded-full  flex justify-center items-center cursor-pointer" onclick="playPause()">
                            <img src="/public/icons/pause.svg" alt="" srcset="" class="show" id="pause-music">
                            <img src="/public/assets/play.svg" alt="" srcset="" class="hidden" id="play-music">
                        </div>
                    </div>

                    <audio controls id="music-on" class="hidden">
                        <source src="/public/assets/Kupu kupu cinta CUT.mp3" type="audio/mp3">
                    </audio>
                </div>
            </section>
        </div>

    </div>

    <script src="public/js/main.js"></script>
</body>

</html>