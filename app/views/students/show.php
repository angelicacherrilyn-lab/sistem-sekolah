
        <div class="mt-8 space-y-2">
            <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold ">Detail Siswa</h1>
                <p>Menampilkan detail siswa yang terdaftar</p>
            </div>
        
        <div class="p-4 bg-white shadow rounded-lg p-4">
           <div class= "grid grid-cols-2 gap-4">
                <div class= "space-y-2">
                    <label class= "block font-bold" for="name">Nama</label>
                    <input value= "<?= $student['name']?>" class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Nama" name="name" readonly>
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="class">Kelas</label>
                    <input value= "<?= $student['nis']?>" class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Kelas" name="class" readonly>
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="nis">NIS</label>
                    <input value= "<?= $student['class']?>" class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan NIS" name="nis" readonly>
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="phone_number">Nomor Telepon</label>
                    <input value= "<?= $student['phone_number']?>" class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Nomor Telepon" name="phone_number" readonly>
                </div>

                <div class="flex justify-end col-span-2">
                    <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                </div>
            </div>
        </div>
