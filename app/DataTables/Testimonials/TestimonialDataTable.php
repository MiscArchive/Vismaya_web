<?php

namespace App\DataTables\Testimonials;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Str;


class TestimonialDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->editColumn('image', function ($query) {
                return $query->image ? '<img src="' . asset('uploads/' . $query->image) . '" alt="" class="rounded avatar-sm">' : '';
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
                $editBtn = '<a href="' . route('testimonials.edit', $query->id) . '" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

                $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteTestimonial(' . $query->id . ')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';
                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['image', 'actions', 'description','status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Testimonial $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('id', 'desc');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('testimonial-table')
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
                'name' => 'title',
                'title' => 'Title',
                'className' => 'text-center',
                'data' => 'title',
            ],
            [
                'name' => 'description',
                'title' => 'Description',
                'className' => 'text-center',
                'data' => 'description',
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
        return 'Testimonial_' . date('YmdHis');
    }
}
