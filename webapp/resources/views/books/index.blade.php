@extends('layouts.app')
@section('styles')
<link href="https://cdn.datatables.net/v/bs/jszip-3.10.1/dt-1.13.6/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.10.0/r-2.5.0/rg-1.4.0/rr-1.4.1/sc-2.2.0/sb-1.5.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/home') }}">Dashboard</a>
                            </li>
                            <li class="active">Buku</li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Buku</h2>
                    </div>

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-primary" href="{{ url('/admin/books/create') }}">Tambah</a>
                            <a class="btn btn-primary" href="{{ url('/admin/export/books') }}">Export</a>
                        </p>
                        {!! $html->table() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
   <!-- !! $html->scripts() !! -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/v/bs/jszip-3.10.1/dt-1.13.6/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/date-1.5.1/fc-4.3.0/fh-3.4.0/kt-2.10.0/r-2.5.0/rg-1.4.0/rr-1.4.1/sc-2.2.0/sb-1.5.0/sp-2.2.0/sl-1.7.0/sr-1.3.0/datatables.min.js"></script>
{!! $html->scripts() !!}

@endsection