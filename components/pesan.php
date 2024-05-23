<div class="mx-10 flex flex-col gap-5 pt-32 justify-center font-poppins text-paragraph ">

    <h4 class="text-center text-[2rem] font-semibold ">Pesan untuk Catin</h4>
    <p class="text-center text-sm">
        Kami menyediakan fitur khusus bagi Bapak/Ibu/Saudara/i jika ingin mengirimkan pesan dan doa kepada calon pengantin, sebagai salah satu bentuk kasih sayang pada hari istimewa pengantin.
    </p>

    <form action="" method="post" class="text-form flex flex-col">
        <label for="name" class="text-lg m-2">Nama</label>
        <input type="text" class="py-2 px-3 border-input-label" placeholder="Masukan nama" id="name">
        <label for="status_kehadiran" class="text-lg mb-2 mx-2 mt-5">Status Kehadiran</label>
        <select name="status_kehadiran" id="" class="text-lg py-2 px-3 border-input-label">
            <option value="" disabled selected class="text-form/85 py-2  px-3">Pilih status kehadiran </option>
            <option value="" class="text-form/85 py-2 px-3">Hadir</option>
            <option value="" class="text-form/85 py-2 px-3">Tidak Hadir</option>
        </select>
        <label for="pesan" class="text-lg m-2 mb-2 mx-2 mt-5">Pesan</label>
        <textarea name="" id="pesan" cols="20" rows="4" class="resize-none py-2 px-3  border-input-label" placeholder="Pesan anda"></textarea>
        <button type="button" class="bg-timeline mt-4 rounded-lg text-white py-2 block">Kirim</button>
    </form>
</div>