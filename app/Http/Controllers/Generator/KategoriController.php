<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Http\Controllers\Generator;

use App\Models\Generator\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CoreController;


use App\Repository\Generator\KategoriRepository;
use App\Service\Generator\KategoriService;


class KategoriController extends CoreController
{
    protected $menu;
    private $settingVal;
    protected $kategoriRepository;
    protected $kategoriService;

    public function __construct(KategoriRepository $kategoriRepository, KategoriService $kategoriService)
    {
        $this->menu = $this->get_menu();
        $this->kategoriRepository = $kategoriRepository;
        $this->kategoriService = $kategoriService;
        $this->settingVal = $this->get_all_setting();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.kategori.index',[
            'menu' => ($this->menu ? $this->menu : ''),
            'setting' => ( $this->settingVal ? $this->settingVal : '')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validate = $this->kategoriService->formValidate($request->all());
        if ($validate)
        {
            return response()->json(
                $validate
                ,200);
        }
        $input = $request->all();
        $kategori = $this->kategoriRepository->save($input);

        return response()->json([
            'status'=> 'success',
            'message' => "Data is successfully  " . (is_object($kategori) == true ? 'added' : 'updated')
        ],200);
    }

    public function destroy(Request $request)
    {
        $id  = $request->only('id');
        $kategori = $this->kategoriRepository->destroy($id);

        return response()->json([
            'status'=> 'success',
            'message' => 'Data is successfully deleted'
        ],200);
    }

    public function get(Request $request)
    {
        $id = $request->get('id');
        $data = $this->kategoriRepository->find($id);

        return response()->json(['data'=> $data ],200);
    }

     public function __datatable()
     {
            return $this->load_data_table($this->kategoriRepository);
     }

}