@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <p>
                                                &nbsp;&nbsp;
                                            </p>
                                            <h1><b>Mis Certificados</b></h1>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Mis Certificados</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>


<form action="" id="qualification"></form>

                            <p></p>
                             <!-- /.content -->
                             {{-- {{ $student->onEachSide(5)->links() }} --}}
                            <div id="mycontent">
                                @include('student/certificate_studenttable')
                            </div>





@endsection
