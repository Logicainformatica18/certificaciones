    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @php
                $enumeracion = 0;
                
            @endphp
            <div class="row">



                @foreach ($registry as $registrys)
                    <div class="col col-lg-3">


                        @php
                            $img = $registrys->course->detail;
                        @endphp
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('dist/img/cursos/' . $img) }}" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color: #003399;color:white">
                                <h5 class="card-title">{{ $registrys->course->description }} </h5>
                                <div class="ribbon-wrapper">
                                    <div class="ribbon" style="background-color: #00cc99">
                                        {{ $registrys->edition }}
                                    </div>
                                </div>
                                   <p>
                                    &nbsp;
                                </p>
                                <p class="card-text"style="font-size:13px">
                                    {{ substr($registrys->fec_start, 0, 11) }}
                                </p>
                             
                                @role('Estudiante')
                                    <a class="btn btn-sm" style="color:white;background-color: #00cc99"
                                        onclick="inscriptionStore('{{ $registrys->id }}','{{Auth::user()->model_has_roles[0]->model_id}}-{{Auth::user()->model_has_roles[0]->model_type}}-{{Auth::user()->model_has_roles[0]->role_id}}')">
                                        INSCRIBIRME</a>
                                @endrole

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

  


        </div>
    </section>
