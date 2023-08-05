<?php

namespace App\DataTables\Curriculam;

use App\Models\Curriculum;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CurriculumDataTable extends DataTable
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
        ->addColumn('actions', function ($query) {
            $editBtn = '<a href="' . route('curriculam.edit', $query->id) . '" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

            $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteCurriculum(' . $query->id . ')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';
            return $editBtn . $deleteBtn;
        })
        ->rawColumns(['actions']);

    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Curriculum $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('id', 'desc');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('curriculam-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1);
                    // ->selectStyleSingle()
                    // ->buttons([
                    //     Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('pdf'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // ]);
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
                'name' => 'syllabus',
                'title' => 'Syllabus',
                'className' => 'text-center',
                'data' => 'syllabus',
            ],
            [
                'name' => 'age',
                'title' => 'Age',
                'className' => 'text-center',
                'data' => 'age',
            ],
            [
                'name' => 'fee',
                'title' => 'Fee',
                'className' => 'text-center',
                'data' => 'fee',
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
        return 'Curriculam_' . date('YmdHis');
    }
}
