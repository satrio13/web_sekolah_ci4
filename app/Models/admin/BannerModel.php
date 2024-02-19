<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table            = 'tb_banner';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    function list_banner()
    {
        return $this->orderBy('id','desc')->get()->getResult();
    }

    function tambah_banner($data)
    {
        $this->insert($data);
    }

    function edit_banner($data, $id)
    {
        $this->set($data)->where(['id' => $id])->update();
    }

    function cek_banner($id)
    {
        return $this->select('id,gambar')->getWhere(['id' => $id])->getRow();
    }

    function get_banner($id)
    {
        return $this->getWhere(['id' => $id])->getRow();
    }

    function hapus_banner($id)
    {
        $this->delete(['id' => $id]);
    }
    
}