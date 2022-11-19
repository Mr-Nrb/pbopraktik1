<?php

namespace App\Http\Controllers;
use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    protected $SupplierModel;
    public function __construct()
    {
        $this->SupplierModel = new SupplierModel;
    }
    //RETURN VIEW SUPPLIER
    public function index()
    {
        $data = [
            'title' => 'Daftar Supplier',
            'supplier' => $this->SupplierModel->all()
        ];
        return view('supplier.index', $data);
    }
    public function formTambahSupplier()
    {
        return view('supplier.tambahsupplier');
    }

    //INSERT
    public function simpan(Request $request)
    {
        try {
            $data = [
                'nama_supplier' => $request->input('nama_supplier'),
                'alamat_supplier' => $request->input('alamat_supplier'),
                'telp_supplier'        => $request->input('telp_supplier')
            ];
            //insert data ke database
            $insert = $this->SupplierModel->create($data);
            //Promise 
            if ($insert) {
                //redirect('gudang','refresh');
                return redirect('supplier');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
            //return "yaaah error nih, sorry ya";
        }
    }

    //HAPUS
    public function hapus($id=null){
        try{
            $hapus = $this->SupplierModel
                            ->where('id_supplier',$id)
                            ->delete();
            if($hapus){
                return redirect('supplier');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
