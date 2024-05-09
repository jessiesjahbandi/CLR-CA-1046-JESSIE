<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css" />
    <title>Tambahkan Kontak</title>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-6 rounded-lg shadow-lg m-4 max-w-md w-full">
            <h2 class="text-center text-2xl font-semibold text-gray-800 mb-4">Tambahkan Kontak Baru</h2>
            <p class="text-center text-gray-600 mb-4">Mohon isi form untuk menambahkan kontak baru.</p>
            <form action="<?= urlpath('create')?>" method="POST" class="space-y-4">
                <div>
                    <label for="no_hp" class="block text-gray-700 text-sm font-bold mb-2">Nomor Handphone:</label>
                    <input type="text" name="no_hp" id="no_hp" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="owner" class="block text-gray-700 text-sm font-bold mb-2">Owner:</label>
                    <input type="text" name="owner" id="owner" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between gap-2">
                    <button type="submit"
                    class="w-full px-4 py-2 border text-white bg-gradient-to-br from-[#e5a046] to-[#e5a046] hover:from-[#d97706] hover:to-[#b45309] font-bold rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                        Tambahkan
                    </button>
                    <button type="button" id="btnKembali" onclick="window.location='<?= urlpath('dashboard') ?>'"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>
    </form>
</body>

</html>
