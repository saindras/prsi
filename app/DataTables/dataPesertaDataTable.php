<?php

namespace App\DataTables;

use App\dataPeserta;;
use Yajra\Datatables\Services\DataTable;

class dataPesertaDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    // sebelumnya: public function ajax()
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'path.to.action.view');
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = dataPeserta::query();
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())                    
                    ->ajax('')
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom' => 'Bfrtip',
                        'buttons' => ['excel', 'print', 'reload'],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'idpeserta' ,
            // add your columns
            'namapeserta',
            'jk',
            'tgllahir',
            'asalsekolah',
            'umur',
            'kelompokumur',            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'datapesertadatatable_' . time();
    }
}
