<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel = "stylesheet" href="/css/output.css">
</head>

<body class ="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex items-center justify-between cointainer mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create"class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="container mx-auto grow">
        <div class="mt-8 space-y-2">
            <div class="p-4 shadow rounded-lg bg-white">
                <h1 class="text-2xl font-bold ">Edit Siswa</h1>
                <p>Melakukan perubahan data siswa yang terdaftar</p>
            </div>
        
        <div class="p-4 bg-white shadow rounded-lg p-4">
           <form action="" class= "grid grid-cols-2 gap-4">
                <div class= "space-y-2">
                    <label class= "block font-bold" for="name">Nama</label>
                    <input class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Nama" name="name">
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="class">Kelas</label>
                    <input class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Kelas" name="class">
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="NIS">NIS</label>
                    <input class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan NIS" name="NIS">
                </div>
                <div class= "space-y-2">
                    <label class= "block font-bold" for="phone_number">Nomor Telepon</label>
                    <input class= "w-full px-4 py-2 border rounded-lg" type="text" id="name" placeholder="Masukan Nomor Telepon" name="phone_number">
                </div>

                <div class="flex justify-end col-span-2">
                    <a href="/students" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                    <button type="submit" class="py-2 px-4 bg-blue-500 rounded-lg text-white">Simpan</button>
                </div>
           </form>
        </div>
    </main>


    <footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>
</html>