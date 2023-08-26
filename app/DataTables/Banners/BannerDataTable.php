<?php

namespace App\DataTables\Banners;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Str;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;

class BannerDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query results from query() method
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->editColumn('establishment_id', function ($query) {
                return $query->establishment ? $query->establishment->name : '';
            })
            ->editColumn('image', function ($query) {
                return $query->image ? '<img src="'.asset('uploads/'.$query->image).'" alt="" class="rounded avatar-sm">' : '';
            })
            ->editColumn('description', function ($query) {
                $description = nl2br($query->description);

                return Str::limit($description, 50, '...');
            })
            ->editColumn('status', function ($query) {
                if ($query->status == 1) {
                    return '<span class="badge bg-success">Active</span>';
                }

                return '<span class="badge bg-warning">In-Active</span>';
            })
            ->addColumn('actions', function ($query) {
                $editBtn = '<a href="'.route('banners.edit', $query->id).'" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

                $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteBanner('.$query->id.')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';

                return $editBtn.$deleteBtn;
            })
            ->rawColumns(['image', 'actions', 'description', 'status','establishment_id']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Banner $model): QueryBuilder
    {
        return $model->newQuery()->with('establishment');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('banner-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1);

        // return $this->builder()
        //             ->setTableId('testimonial-table')
        //             ->columns($this->getColumns())
        //             ->minifiedAjax()
        //             ->dom('Bfrtip')
        //             ->orderBy(1)
        //             ->selectStyleSingle()
        //             ->buttons([
        //                 Button::make('excel'),
        //                 Button::make('csv'),
        //                 Button::make('pdf'),
        //                 Button::make('print'),
        //                 Button::make('reset'),
        //                 Button::make('reload')
        //             ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    protected function getColumns()
    {
        return [
            [
                'name' => 'id',
                'title' => '#',
                'className' => 'text-center',
                'data' => 'DT_RowIndex',
            ],
            [
                'name' => 'establishment_id',
                'title' => 'Establishment',
                'className' => 'text-center',
                'data' => 'establishment_id',
            ],
            [
                'name' => 'title',
                'title' => 'Title',
                'className' => 'text-center',
                'data' => 'title',
            ],
            [
                'name' => 'image',
                'title' => 'Image',
                'className' => 'text-center',
                'data' => 'image',
            ],
            [
                'name' => 'status',
                'title' => 'Status',
                'className' => 'text-center',
                'data' => 'status',
            ],
            [
                'name' => 'actions',
                'title' => 'Actions',
                'className' => 'text-center',
                'data' => 'actions',
            ],
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Banner_'.date('YmdHis');
    }
}
