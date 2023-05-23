<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Repository\Generator;

use App\Models\Generator\Kategori;
use App\Service\Generator\KategoriService;
use App\Repository\CoreRepository;

class KategoriRepository extends CoreRepository
{
    protected $kategori;

    public function __construct(Kategori $kategori)
    {
        $this->setModel($kategori);
        $this->kategori = $kategori;
    }

    public function findWith($id, $relation)
    {
        return $this->kategori->with("$relation")->find($id);
    }

    public function get_all(){
        return $this->kategori->withTrashed()->get();
    }

    public function dataTable($access)
    {
        $data = new KategoriService($this);
        return $data->loadDataTable($access);
    }

}
