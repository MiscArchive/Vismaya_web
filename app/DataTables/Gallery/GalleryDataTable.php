<?php

namespace App\DataTables\Gallery;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class GalleryDataTable extends DataTable
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
            ->addColumn('file', function ($query) {
                if (filled($query->image)) {
                    return '<a href="'.asset('uploads/' . $query->image).'" class="badge bg-secondary-subtle text-secondary badge-border" target="_blank">View</a>';
                }
                if (filled($query->video_url)) {
                    return '<a href="'.asset('uploads/' . $query->video_url).'" class="badge bg-secondary-subtle text-secondary badge-border" target="_blank">View</a>';
                }
            })
            ->addColumn('actions', function ($query) {
                $editBtn = '<a href="' . route('gallery.edit', $query->id) . '" class="btn btn-info btn-icon btn-sm remove-item-btn"><i class="bx bx-edit" title="Edit"></i></a>';

                $deleteBtn = '<button class="btn btn-danger btn-icon btn-sm remove-item-btn" onClick="deleteGallery(' . $query->id . ')" style="margin-left:10px;"><i class="ph-trash" title="Delete"></i></button>';
                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['file', 'actions']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Gallery $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('gallery-table')
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
                'name' => 'type',
                'title' => 'Type',
                'className' => 'text-center',
                'data' => 'type',
            ],
            [
                'name' => 'file',
                'title' => 'File',
                'className' => 'text-center',
                'data' => 'file',
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
        return 'Gallery_' . date('YmdHis');
    }
}
