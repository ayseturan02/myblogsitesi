@extends("back.layout.master")
@section("title", "yetenekler")
@section("content")

    <a href="{{route("admin.yetenekler.create")}}" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
        <span class="text">yeni yetenek ekle</span>
    </a>
<br>
    <br>
    @foreach($abilities as $ability)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h5>{{$ability->title}}</h5>
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">%{{$ability->content}}</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width:50%" aria-valuenow="{{$ability->content}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{route("admin.yetenekler.edit", $ability->id )}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
            <span class="text">değeri değiştir</span>
        </a>
        <a href="{{route("admin.yetenekler.destroy", $ability->id)}}" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
            <span class="text">sil</span>
        </a>
    </div>
    @endforeach

@endsection
