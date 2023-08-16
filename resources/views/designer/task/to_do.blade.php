<x-layouts.app>
<style type="text/css">
	#myTable
	{
		margin-top: 30px;
	}
	#permission
	{
		margin-top: 10px;
		margin-bottom: 10px;

	}
	#save
	{
		margin-left: 1040px;
	}
    card-transparent
    {
        border-radius: 45%;
    }

    .bg-info-light
       {
        color: #FABB18 !important;
    background-color: #FFF8E8 !important;
    border-radius: 5px;
    margin-left: 12px;
       }


    </style>

<body>




            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="container-fluid">

                   <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content" style="margin-top: 19px;">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <lable style="color: black;"> In Progress  (04) </lable>
                                                        <div class="ms-auto mt-md-3 mt-lg-0">

                                                            <a href="#" class="btn bg-info-light mr-3" ><i data-feather="pause-circle" class="feather-icon"></i>

                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            @foreach ($Progress as $Progres)
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="{{ route('tasks.show', $Progres->id) }}">


                                                    <h5 class="mb-3">{{$Progres->name}}</h5>
                                                    </a>
                                                    <p class="mb-3"> <i data-feather="calendar" class="svg-icon" style="margin-right: 5px;"></i>{{$Progres->end_date}}</p>
                                                    <p class="mb-3"><i data-feather="watch" class="svg-icon" style="margin-right: 5px;"></i>{{$Progres->real_end_date}}</p>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <lable style="color: black;"> In Review  (03) </lable>

                                                        <div class="ms-auto mt-md-3 mt-lg-0">

                                                            <a href="#" class="btn bg-info-light mr-3" ><i data-feather="loader" class="feather-icon"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            @foreach ($Tests as $Test)
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="{{ route('tasks.show',  $Test->id) }}">


                                                    <h5 class="mb-3">{{ $Test->name}}</h5>
                                                    </a>
                                                    <p class="mb-3"> <i data-feather="calendar" class="svg-icon" style="margin-right: 5px;"></i>{{$Test->end_date}}</p>
                                                    <p class="mb-3"><i data-feather="watch" class="svg-icon" style="margin-right: 5px;"></i>{{ $Test->real_end_date}}</p>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>
                                                </div>
                                            </div>
                                           @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <lable style="color: black;"> Editing  (05) </lable>
                                                        <div class="ms-auto mt-md-3 mt-lg-0">

                                                            <a href="#" class="btn bg-info-light mr-3" ><i data-feather="edit-2" class="feather-icon"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            @foreach ($Fixs as $Fix)
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="{{ route('tasks.show',  $Fix->id) }}">


                                                    <h5 class="mb-3">{{ $Fix->name}}</h5>
                                                    </a>
                                                    <p class="mb-3"> <i data-feather="calendar" class="svg-icon" style="margin-right: 5px;"></i>{{$Fix->end_date}}</p>
                                                    <p class="mb-3"><i data-feather="watch" class="svg-icon" style="margin-right: 5px;"></i>{{ $Fix->real_end_date}}</p>

                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card-transparent mb-0 desk-info" >
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <lable style="color: black;"> All Finish Task Today  (05) </lable>
                                                        <div class="ms-auto mt-md-3 mt-lg-0">

                                                            <a href="#" class="btn bg-info-light mr-3" ><i data-feather="target" class="feather-icon"></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            @foreach ($Completeds as $Completed)
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="{{ route('tasks.show',  $Completed->id) }}">


                                                    <h5 class="mb-3">{{$Completed->name}}</h5>
                                                    </a>
                                                    <p class="mb-3"> <i data-feather="calendar" class="svg-icon" style="margin-right: 5px;"></i>{{$Completed->end_date}}</p>
                                                    <p class="mb-3"><i data-feather="watch" class="svg-icon" style="margin-right: 5px;"></i>{{ $Completed->real_end_date}}</p>
                                                    <p class="mb-3" style="color: rgb(144, 224, 159) ;"><i data-feather="check-circle" class="svg-icon" style="margin-right: 5px; color: rgb(144, 224, 159);"></i>Done</p>


                                                </div>
                                            </div>
                                           @endforeach



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
              </div>

</x-layouts.app>
