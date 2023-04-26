<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    protected $viewPath = 'Admin.orders.';
    private $route = 'orders';


    public function __construct(Order $model)
    {
        $this->objectName = $model;
    }

    public function index()
    {
        return view($this->viewPath . '.index');
    }

    public function datatable(Request $request)
    {
        $data = $this->objectName::orderBy('created_at', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->addColumn('name', function ($row) {
                $actions = $row->first_name .' ' . $row->last_name;
                return $actions;
            })
            ->addColumn('created_at', function ($row) {
                $actions = Carbon::parse($row->created_at)->format('Y-m-d H:i:s');
                return $actions;
            })
            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . route($this->route . ".show", ['id' => $row->id]) . '" class="btn btn-active-light-info">' . trans('lang.view') . ' <i class="bi bi-eye"></i>  </a>';
                return $actions;
            })

            ->addColumn('status', function ($row) {
                $text = $row->status ? trans('lang.' . $row->status->name) : '';
                return ' <span class="text-gray-800 text-hover-primary mb-1">' . $text . '</span>';
            })
            ->rawColumns(['actions', 'checkbox', 'category', 'customer_name', 'provider_name', 'status','payment_status'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->objectName::findOrFail($id);
        return view($this->viewPath . '.show', compact('data'));
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
    public function update(ReadyOrderRequest $request)
    {
        $data = $request->validated();
        if ($data['image'] == null) {
            unset($data['image']);
        } else {
            $img_name = 'service_' . time() . random_int(0000, 9999) . '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move(public_path('/uploads/services/'), $img_name);
            $data['image'] = $img_name;
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

    public function changeActive(Request $request)
    {
        $data['status'] = $request->status;
        $this->objectName::where('id', $request->id)->update($data);
        return 1;
    }

    public function changeIsChecked(Request $request)
    {
        $data['is_checked'] = $request->is_checked;
        $this->objectName::where('id', $request->id)->update($data);
        return 1;
    }

    public function table_buttons()
    {
        return view($this->viewPath . '.button');
    }
}
