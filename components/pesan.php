<div class="mx-10 flex flex-col gap-5 pt-64 h-[130vh] justify-center font-poppins text-paragraph ">

    <h4 class="text-center text-[2rem] font-semibold ">Pesan untuk Catin</h4>
    <p class="text-center text-sm">
        Kami menyediakan fitur khusus bagi Bapak/Ibu/Saudara/i jika ingin mengirimkan pesan dan doa kepada calon pengantin, sebagai salah satu bentuk kasih sayang pada hari istimewa pengantin.
    </p>

    <form action="http://localhost:8000/System.php" method="post" class="text-form flex flex-col" id="myForm">
        <label for="nama" class="text-lg m-2">Nama</label>
        <input type="text" class="py-2 px-3 border-input-label" placeholder="Masukan nama" id="nama" name="nama">
        <label for="status-kehadiran" class="text-lg mb-2 mx-2 mt-5">Status Kehadiran</label>
        <select name="status_kehadiran" id="status-kehadiran" class="text-lg py-2 px-3 border-input-label">
            <option value="" disabled selected class="text-form/85 py-2  px-3">Pilih status kehadiran </option>
            <option value="Y" class="text-form/85 py-2 px-3">Hadir</option>
            <option value="N" class="text-form/85 py-2 px-3">Tidak Hadir</option>
        </select>
        <label for="pesan" class="text-lg m-2 mb-2 mx-2 mt-5">Pesan</label>
        <textarea name="pesan" id="pesan" cols="20" rows="4" class="resize-none py-2 px-3  border-input-label" placeholder="Pesan anda"></textarea>
        <button type="submit" name="submit" class="bg-timeline mt-4 rounded-lg text-white py-2 block">Kirim</button>
    </form>
</div>