<?php

namespace App\DataTables\Branches;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Str;

class BranchDataTable extends DataTable
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
            $editBtn = '<a href="' . route('branches.edit', $query->id) . '" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

            $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteBranch(' . $query->id . ')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';
            return $editBtn . $deleteBtn;
        })
        ->rawColumns(['establishment_id', 'actions', 'description','status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Branch $model): QueryBuilder
    {
        return $model->newQuery()->with('establishment');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('branch-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1);
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
                'name' => 'name',
                'title' => 'Name',
                'className' => 'text-center',
                'data' => 'name',
            ],
            [
                'name' => 'description',
                'title' => 'Description',
                'className' => 'text-center',
                'data' => 'description',
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
        return 'Branch_' . date('YmdHis');
    }
}
