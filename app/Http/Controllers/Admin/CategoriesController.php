<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{

    protected $viewPath = 'Admin.categories.';
    private $route = 'categories';

    public function __construct(Category $model)
    {
        $this->objectName = $model;
    }
    public function index()
    {
        return view($this->viewPath .'index');
    }
    public function datatable(Request $request)
    {
        $data = $this->objectName::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>
                                   <br> <small class="text-gray-600">' . $row->email . '</small>';
                return $name;
            })

            ->addColumn('is_active', $this->viewPath . 'parts.active_btn')

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url($this->route."/edit/" . $row->id) . '" class="btn btn-active-light-info"><i class="bi bi-pencil-fill"></i> تعديل </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active'])
            ->make();

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $this->objectName::create($data);

        return redirect(route($this->route . '.index'))->with('message', trans('lang.added_s'));




    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->objectName::findOrFail($id);
        return view($this->viewPath . '.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $img_name = 'slider_' . time() . random_int(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('/uploads/users/'), $img_name);
            $data['image'] = $img_name;
        } else {
            unset($data['image']);
        }
        $this->objectName::whereId($request->id)->update($data);




        return redirect(route($this->route . '.index'))->with('message', trans('lang.updated_s'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $this->objectName::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }

    public function table_buttons()
    {
        return view($this->viewPath . '.button');
    }

    public function changeActive(Request $request)
    {
        $data['is_active'] = $request->status;
        $this->objectName::where('id', $request->id)->update($data);
        return 1;
    }
}
