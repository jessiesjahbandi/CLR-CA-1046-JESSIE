<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $no_hp = $_POST['no_hp'];
    $owner = $_POST['owner'];

    $query = $pdo->prepare("UPDATE dashboard SET no_hp = ?, owner = ? WHERE id = ?");
    $query->execute([$no_hp, $owner, $id]);

    header("Location: index.php");
} else {
    $id = $_GET['id'];
    $query = $pdo->prepare("SELECT * FROM dashboard WHERE id = ?");
    $query->execute([$id]);
    $kontak = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="output.css" />
    <title>Ubah Kontak</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Ubah Kontak</h3>
            <form action="update.php" method="post" class="mt-4">
                <div>
                    <input type="hidden" name="id" value="<?= $kontak['id'] ?>">
                    <label for="no_hp" class="block">Nomor HP:</label>
                    <input type="text" name="no_hp" id="no_hp" required value="<?= $kontak['no_hp'] ?>"
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label for="owner" class="block">Owner:</label>
                    <input type="text" required value="<?= $kontak['owner'] ?>" name="owner" id="owner" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <input type="submit" value="Ubah" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                    <button
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        <a href="index.php">Kembali</a>
                    </button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
