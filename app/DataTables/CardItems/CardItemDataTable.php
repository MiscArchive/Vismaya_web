<?php

namespace App\DataTables\CardItems;

use App\Models\CardItem;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Str;

use Yajra\DataTables\Services\DataTable;

class CardItemDataTable extends DataTable
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
        ->editColumn('establishment_id', function ($query) {
            return $query->establishment ? $query->establishment->name : '';
        })
        ->editColumn('title', function ($query) {
            return $query->title;
        })
        ->editColumn('type', function ($query) {
            return $query->type;
        })
        ->editColumn('status', function ($query) {
            if ($query->status == 1) {
                return '<span class="badge bg-success">Active</span>';
            }
            return '<span class="badge bg-warning">In-Active</span>';
        })
        ->editColumn('is_featured', function ($query) {
            if ($query->is_featured == 1) {
                return '<span class="badge bg-success">Yes</span>';
            }
            return '<span class="badge bg-warning">No</span>';
        })
        ->addColumn('actions', function ($query) {
            $editBtn = '<a href="' . route('card-items.edit', $query->id) . '" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

            $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteCardItem(' . $query->id . ')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';
            return $editBtn . $deleteBtn;
        })
        ->rawColumns(['establishment_id', 'type','actions', 'title','status','is_featured']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(CardItem $model): QueryBuilder
    {
        return $model->newQuery()->with('establishment');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('carditem-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
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
                'name' => 'type',
                'title' => 'Type',
                'className' => 'text-center',
                'data' => 'type',
            ],
            [
                'name' => 'status',
                'title' => 'Status',
                'className' => 'text-center',
                'data' => 'status',
            ],
            [
                'name' => 'is_featured',
                'title' => 'Featured',
                'className' => 'text-center',
                'data' => 'is_featured',
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
        return 'CardItem_' . date('YmdHis');
    }
}
