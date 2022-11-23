<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-200 h-screen">

<!-- EDIT FORM  -->
<!-- POP UP FORM --------------------------------------------------------------------------------->
<input type="checkbox" id="my-modal-4" class="modal-toggle" />
<div class="modal">
  <div class="modal-box font-bold">
    <h1 class="text-center font-extrabold mb-4">Tambah Lokasi</h1>
    <label for="my-modal-3" class="btn btn-sm btn-circle absolute hover:bg-red-500 border border-white right-2 top-2">✕</label>
    <form action="editsimpan" method="POST">
        @csrf
        <div class="w-full mb-2">
            <label for="nama_supplier"> Nama Supplier </label>
            <br>
            <input type="text" name="nama_supplier" id="nama_supplier" value="{{$nama_supplier}}" class="w-full rounded-md shadow-inner border border-gray-400" >
            <input type="hidden"  name="id_supplier" value="{{$id_supplier}}" />
        </div>
        <div class="w-full mb-2">
            <label for="alamat_supplier"> Alamat </label>
            <br>
            <input type="text" name="alamat_supplier" id="alamat_supplier" value="{{$alamat_supplier}}" class="w-full rounded-md shadow-inner border border-gray-400">
        </div>
        <div class="w-full flex flex-wrap text-[#06283D]">
            <div class="flex flex-wrap w-full mt-2">
                <label for="telp_supplier">Kontak</label>
                <br>
                <input type="" name="telp_supplier" maxlength="14" placeholder="08998227460" value="{{$telp_supplier}}" id="telp_supplier" class="w-full rounded-md shadow-inner border border-gray-400">
            </div>
        </div>

        
        <div class="modal-action">
        <button type="submit" value="simpan" class="btn bg-[#256D85] rounded-lg px-5 py-3 text-center shadow-md hover:bg-emerald-700 font-bold text-white">Simpan</button>
        </div>

    </form>
  </div>
</div>
</body>
</html>

