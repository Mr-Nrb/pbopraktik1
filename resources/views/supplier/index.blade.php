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
<br>
<br>
<div>
    
</div>
<div class="bg-emerald-500  ">
    <h1 class="text-center font-serif- font-bold text-lg py-auto"> Detail Lokasi </h1>
</div>

<div class="mx-20 mt-20">    
    <label for="my-modal-3" class="btn bg-blue-400 shadow-md rounded-md" >Tambah</label>
</div>

<div class="overflow-x-scroll mx-20 mt-2">
<table class="table w-full text-center">
    <tr>
        <td class="bg-emerald-500 text-teal-900">
            NO
        </td>
        <th class="bg-emerald-500 text-teal-900">
            Supplier
        </th>
        <th class="bg-emerald-500 text-teal-900">
            Alamat
        </th>
        <th class="bg-emerald-500 text-teal-900">
            Kontak  
        </th >
        <th class="bg-emerald-500 text-teal-900">
            AKSI
        </th>
    </tr>
    <?php 
        $no = 1;
    ?>
    @foreach($supplier as $sup)
    
    <tr class="text-center ">
        <td class=" ">
            {{$no++}}
        </td>
        <td class=" ">
            {{$sup->nama_supplier}}
        </td>
        <td class="w-[30em]">
            <p class="whitespace-normal text-justify">{{$sup->alamat_supplier}}</p>
        </td>
        <td>
            <h1 class="whitespace-normal">{{$sup->telp_supplier}}</h1> 
        </td>
        <td class="">
            <div class="flex flex-wrap m-auto h-full justify-center">
            <a href="supplier/edit/{{$sup->id_supplier}}"><label for="my-modal-4" class="btn bg-blue-400 shadow-md rounded-md" >Tambah</label></a>
            <a href="supplier/hapus/{{$sup->id_supplier}}" 
            onclick="return confirm('Anda yakin ingin hapus data ini ?')"><button class="bg-red-600 m-1 hover:bg-yellow-400 text-white rounded-lg font-bold text-sm p-2
            ">HAPUS</button></a>
            
            </div>
        </td>
    </tr>
    @endforeach
</table> 
</div>
<!-- POP UP FORM --------------------------------------------------------------------------------->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<div class="modal">
  <div class="modal-box font-bold">
    <h1 class="text-center font-extrabold mb-4">Tambah Lokasi</h1>
    <label for="my-modal-3" class="btn btn-sm btn-circle absolute hover:bg-red-500 border border-white right-2 top-2">✕</label>
    <form action="simpan" method="POST">
        @csrf
        <div class="w-full mb-2">
            <label for="nama_supplier"> Nama Supplier </label>
            <br>
            <input type="text" name="nama_supplier" id="nama_supplier" class="w-full rounded-md shadow-inner border border-gray-400" required>
        </div>
        <div class="w-full mb-2">
            <label for="alamat_supplier"> Alamat </label>
            <br>
            <input type="text" name="alamat_supplier" id="alamat_supplier" class="w-full rounded-md shadow-inner border border-gray-400" required>
        </div>
        <div class="w-full flex flex-wrap text-[#06283D]">
            <div class="flex flex-wrap w-full mt-2">
                <label for="telp_supplier">Kontak</label>
                <br>
                <input type="" name="telp_supplier" maxlength="14" placeholder="08998227460" id="telp_supplier" class="w-full rounded-md shadow-inner border border-gray-400" required>
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
