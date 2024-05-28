<!-- amplop digital -->
<div class="font-poppins relative  -mt-10  flex flex-col justify-center dark:text-d-text text-paragraph text-center" data-aos="fade-up">
    <h4 class="text-[2rem] font-semibold mb-4 dark:text-d-heading">Amplop Digital</h4>
    <p class="mx-12 text-sm">Do'a restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless</p>

    <button class=" mt-10 mx-auto mb-12 text-white bg-timeline flex items-center justify-center rounded-lg gap-2 px-5 py-2 text-sm" onclick="lihatRekening()">
        <img loading="lazy" src="../public/icons/gift.svg" alt="" class=""> Kirim Hadiah
    </button>

    <div class=" bg-white px-14 dark:text-d-text dark:bg-d-background flex justify-center items-center text-center flex-col text-paragraph hidden" id="rekening">
        <h5 class="text-[2rem] font-semibold mb-5 leading-10">Hadiah <br> Penikahan</h5>
        <p class="text-sm">Anda dapat mengirimkan amplop ke daftar rekening yang tertera di bawah ini :</p>
        <h4 class="tex-lg font-semibold mt-3">BSI</h4>
        <p class="text-sm">a.n. Rohmat Supriyanto</p>
        <div class="rekening">
            7158698549

            <button type="button" class="outline-none px-2 py-1 mt-2  flex justify-center items-center rounded-lg mx-auto active:ring active:ring-slate-400 active:ring-opacity-25 active:bg-slate-100" onclick="copyRekening('BSI')">
                <img loading="lazy" src="../public/icons/copy.svg" class="w-3 dark:text-white" alt="">Salin</button>
        </div>
        <h4 class="tex-lg font-semibold mt-3">BNI </h4>
        <p class="text-sm">a.n. Saputri</p>
        <div class="rekening">
            0768915540

            <button type="button" class="outline-none px-2 py-1 mt-2  flex justify-center items-center rounded-lg mx-auto active:ring active:ring-slate-400 active:ring-opacity-25 active:bg-slate-100" onclick="copyRekening('BNI')">
                <img loading="lazy" src="../public/icons/copy.svg" class="w-3" alt="">Salin</button>
        </div>

        <button class=" mt-10 mx-auto mb-12 text-white bg-timeline flex items-center justify-center rounded-lg gap-2 px-5 py-2 text-sm" onclick="lihatRekening()">
            Tutup
        </button>
    </div>

    <div class="flex absolute top-0 left-0 bottom-0 w-20 justify-around flex-col pt-10">
        <img loading="lazy" src="../public/img/batu-gift-kanan-664dc76032fa5.webp" alt="" class="w-9">
        <img loading="lazy" src="../public/img/daun-gift-kiri-664dc75f8b296.webp" alt="" class="">
    </div>
    <div class="flex absolute top-0 right-0 bottom-0 w-20 justify-around flex-col items-end pt-10">
        <img loading="lazy" src="../public/img/batu-gift-kiri-664dc7606738a.webp" alt="" class="w-9 ">
        <img loading="lazy" src="../public/img/daun-gift-kanan-664dc75f916c2.webp" alt="" class="">
    </div>
</div>