@extends('Dashboard.App.App')
@section('content')
    <div class="card">
        <div class="card-header py-0">
            <div class="d-flex justify-content-between">
                <h3 class=" my-2 me-a"> الاقسام </h3>
                <form class="row g-3 h-25 mt-1  needs-validation" action="{{ route('Section.index') }}" method="get">
                    <div class="col-md-6 m-0">
                        <input type="text" class="form-control  " value="{{ request()->search }}" id="validationCustom01"
                            name="search">

                    </div>
                    <div class="col-md-6 m-0">
                        <button class="btn px-1 btn-primary" type="submit"><i class="fa mx-1 fa-search"
                                aria-hidden="true"></i>بحث</button>

{{--
                        @if (auth()->user()->hasPermission('section_create'))
                            <a class="btn btn-primary my-0 ms-a"href="{{ route('section.create') }}">اضافة قسم</a>
                        @else
                            <a class="disabled btn btn-primary my-0 ms-a"href="{{ route('section.create') }}">اضافة
                                قسم</a>
                        @endif --}}

                    </div>
                </form>
                <ol class="breadcrumb my-2">
                    <li><a class="py-0 text-dark px-1 nav-link" href="{{ route('home') }}"><i class="fa fa-home"
                                aria-hidden="true"></i> الرئيسيه </a></li>
                    < <li class="active mx-2"> الاقسام </a></li>
                </ol>
            </div>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered  text-center table-striped mg-b-0 p-0 text-md-nowrap">
                    <thead>
                        <tr>
                            <th> #</th>
                            <th> اسم القسم</th>
                            <th> الحاله</th>
                            <th> الاجؤاءات </th>


                        </tr>
                    </thead>
                    <tbody>
                        @isset($sections)
                            @foreach ($sections as $index => $section)
                                <tr>

                                    <th class="p-1" scope="row">{{ $index + 1 }}</th>
                                    <th class="p-1" scope="row ">{{ $section->name }}</th>
                                    <th class="p-1" scope="row ">
                                        @if ($section->status == 1)
                                            مفعل
                                        @else
                                            غير مفعيل
                                        @endif
                                    </th>


                                    <th class="py-0">


                                        {{-- @if (auth()->user()->hasPermission('section_update'))
                                            <a href="{{ route('section.edit', $section->id) }}"
                                                class="btn btn-sm my-1 btn-outline-primary"> تعديل<i class="fa fa-edit"
                                                    aria-hidden="true"></i></a>
                                        @else
                                            <a href="{{ route('section.edit', $section->id) }}"
                                                class="btn btn-sm my-1 btn-outline-primary disabled"> تعديل<i class="fa fa-edit"
                                                    aria-hidden="true"></i></a>
                                        @endif

                                        {{-- ########################## ############################################## --}}
{{--
                                        @if (auth()->user()->hasPermission('section_delete'))
                                            <form action="{{ route('section.destroy', $section->id) }}" method="post"
                                                class="d-inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-outline-danger ">
                                                    <i class="fa fa-trash mx-1" aria-hidden="true"></i> حذف </button>
                                            </form>
                                        @else
                                            <button type="submit" class="btn btn-sm btn-outline-danger disabled">
                                                <i class="fa fa-trash mx-1" aria-hidden="true"></i> حذف </button>
                                        @endif  --}}

                                        {{-- ########################## ############################################## --}}

                                        {{-- @if (auth()->user()->hasPermission('section_update')) --}}
                                            <a href="{{ route('section_chaneg_Status', $section->id) }}"
                                                class="btn    btn-sm btn-outline-primary btn-min-width my-1 box-shadow-5">
                                                @if ($section->status == 1)
                                                    <div  class="form-check  mx-2 form-switch ">
                                                        <input disabled class=" form-check-input  " type="checkbox"
                                                            @if ($section->status == 1) checked @endif>
                                                    </div>
                                                @else
                                                    <div  class="form-check mx-2 py-0 form-switch ">
                                                        <input disabled class=" form-check-input " type="checkbox">
                                                    </div>
                                                @endif

                                            </a>
                                        {{-- @else --}}
                                            {{-- <a href="{{ route('section_chaneg_Status', $section->id) }}"
                                                class="btn  py-0 btn-sm disabled btn-outline-primary btn-min-width my-2 box-shadow-5">
                                                @if ($section->status == 1)
                                                    <div style="width: 0px; margin-top: 3px;" class="form-check   form-switch ">
                                                        <input disabled class=" form-check-input  " type="checkbox"
                                                            @if ($section->status == 1) checked @endif>
                                                    </div>
                                                @else
                                                    <div style="width: 0px; margin-top: 3px;" class="form-check  form-switch ">
                                                        <input disabled class=" form-check-input " type="checkbox">
                                                    </div>
                                                @endif

                                            </a> --}}
                                        {{-- @endif --}}

                                    </th>

                                </tr>
                            @endforeach
                        @endisset


                    </tbody>
                </table>
            </div><!-- bd -->
            {{-- {!! $sections->appends(request()->search)->links() !!} --}}
        </div><!-- bd -->
    </div><!-- bd --
@endsection
