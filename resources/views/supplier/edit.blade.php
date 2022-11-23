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
<form method="POST" action="editsimpan">
    <table border="0" cellpadding="20px">
        <tr>
            <td>
                Nama Supplier
            </td>
            <td>
                <input type="text" name="nama_supplier" value="{{$nama_supplier}}"/>
                <input type="hidden"  name="id_supplier" value="{{$id_supplier}}" />
            </td>
        </tr>
        <tr>
            <td>
                Alamat Supplier
            </td>
            <td>
            <textarea name="alamat_supplier" cols="20" rows="5">
                {{$alamat_supplier}}
            </textarea>

            </td>
        </tr>
        <tr>
            <td>
                Telp Supplier
            </td>
            <td>
            <input type="text" name="telp_supplier" value="{{$telp_supplier}}" />
        </tr>
    </table>
    <button type="submit" value="Simpan">SIMPAN</button></body>
</html>
