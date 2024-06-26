<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css" />
    <title>Ubah Kontak</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 rounded-lg text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Ubah Kontak</h3>
            <form action="<?=urlpath('update')?>" method="POST" class="mt-4">
                <div>
                    <input type="hidden" name="id" value="<?= $kontak['id'] ?>">
                    <label for="no_hp" class="block">Nomor HP:</label>
                    <input type="text" name="no_hp" id="no_hp" required value="<?= $kontak['no_hp'] ?>"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                </div>
                <div class="mt-4">
                    <label for="owner" class="block">Owner:</label>
                    <input type="text" required value="<?= $kontak['owner'] ?>" name="owner" id="owner" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600">
                </div>
                <div class="flex items-center justify-between mt-4 gap-4">
                    <button type="submit" class="w-1/2 px-4 py-2 text-white bg-gradient-to-br from-[#e5a046] to-[#e5a046] hover:from-[#d97706] hover:to-[#b45309] focus:outline-none focus:ring-1 focus:ring-gray-600 rounded-md">Ubah</button>
                    <a href="<?=urlpath('dashboard')?>" class="inline-block w-1/2 px-4 py-2 text-center text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-1 focus:ring-gray-600 rounded-md">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
