<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Service\Generator;


use App\Models\Generator\Kategori;
use App\Repository\Generator\KategoriRepository;
use Illuminate\Support\Facades\Validator;
use App\Service\CoreService;

class KategoriService extends CoreService
{
    protected $kategoriRepository;

    public function __construct(KategoriRepository $kategoriRepository)
    {
        $this->kategoriRepository = $kategoriRepository;
    }

    public function formValidate($request)
    {
        $rules = [
//            'email' => 'required|min:1|unique:conf_users,email,NULL,id,deleted_at,NULL'
        ];
        $messages = [
            'email.unique' => 'Email sudah terdaftar.',
        ];
        $validator = Validator::make($request, $rules, $messages);

        if($validator->fails()){
            return [
                'status'=> 'error',
                'message' => $messages
            ];
        }
        return 0;
    }

    public function all()
    {
        return $this->kategoriRepository->all();
    }

    public function find($id, $relation = null)
    {
        return $this->kategoriRepository->find($id, $relation);
    }

    public function loadDataTable($access){
        $model = Kategori::withoutTrashed()->get();
        return $this->privilageBtnDatatable($model, $access);
    }
}
