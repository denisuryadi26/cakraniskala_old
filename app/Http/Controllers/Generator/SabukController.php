<?php
/**
* @author Dodi Priyanto<dodi.priyanto76@gmail.com>
*/

namespace App\Http\Controllers\Generator;

use App\Models\Generator\Sabuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CoreController;


use App\Repository\Generator\SabukRepository;
use App\Service\Generator\SabukService;


class SabukController extends CoreController
{
    protected $menu;
    private $settingVal;
    protected $sabukRepository;
    protected $sabukService;

    public function __construct(SabukRepository $sabukRepository, SabukService $sabukService)
    {
        $this->menu = $this->get_menu();
        $this->sabukRepository = $sabukRepository;
        $this->sabukService = $sabukService;
        $this->settingVal = $this->get_all_setting();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.sabuk.index',[
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
        $validate = $this->sabukService->formValidate($request->all());
        if ($validate)
        {
            return response()->json(
                $validate
                ,200);
        }
        $input = $request->all();
        $sabuk = $this->sabukRepository->save($input);

        return response()->json([
            'status'=> 'success',
            'message' => "Data is successfully  " . (is_object($sabuk) == true ? 'added' : 'updated')
        ],200);
    }

    public function destroy(Request $request)
    {
        $id  = $request->only('id');
        $sabuk = $this->sabukRepository->destroy($id);

        return response()->json([
            'status'=> 'success',
            'message' => 'Data is successfully deleted'
        ],200);
    }

    public function get(Request $request)
    {
        $id = $request->get('id');
        $data = $this->sabukRepository->find($id);

        return response()->json(['data'=> $data ],200);
    }

     public function __datatable()
     {
            return $this->load_data_table($this->sabukRepository);
     }

}