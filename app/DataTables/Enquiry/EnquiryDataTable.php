<?php

namespace App\DataTables\Enquiry;

use App\Models\Enquiry;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class EnquiryDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addIndexColumn()
        ->editColumn('establishment_id', function ($query) {
            return $query->establishment ? $query->establishment->name : '';
        })

        ->addColumn('actions', function ($query) {
            $editBtn = '<button class="btn btn-info btn-icon btn-sm open-modal-btn" data-comment="'.$query->comments.'"><i class="ph ph-eye-thin" title="View"></i></button>';

            return $editBtn;
        })
        ->rawColumns(['establishment_id', 'actions']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Enquiry $model): QueryBuilder
    {
        return $model->newQuery()->with('establishment');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('enquiry-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
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
                'name' => 'email',
                'title' => 'email',
                'className' => 'text-center',
                'data' => 'email',
            ],
            [
                'name' => 'telephone',
                'title' => 'Mobile',
                'className' => 'text-center',
                'data' => 'telephone',
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
        return 'Enquiry_'.date('YmdHis');
    }
}
