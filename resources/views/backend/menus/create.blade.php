@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">DUNYO.INFO</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menus.index') }}">MENUS</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Create</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD NEW MENU</h4>
                    </div>
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home">O'zbek</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu1">Ўзбек</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu2">English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#menu3">Русский</a>
                                </li>
                            </ul>

                          <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane container-fluid active" id="home">
                                    <label class="mt-3 mb-3"><b>O'zbek titldagi ma'lumotlar</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_uz" name="name_uz" type="text" class="form-control input-border-bottom" required value="{{ old('name_uz') }}">
                                        <label for="title_uz" class="placeholder">Sarlavha</label>
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu1">
                                    <label class="mt-3 mb-3"><b>Ўзбек тилидаги маълумотлар</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_cyrl" name="name_cyrl" type="text" class="form-control input-border-bottom" required value="{{ old('name_cyrl') }}">
                                        <label for="title_cyrl" class="placeholder">Сарлавҳа</label>
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu2">
                                    <label class="mt-3 mb-3"><b>Information in English Titles</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_en" name="name_en" type="text" class="form-control input-border-bottom" required value="{{ old('name_en') }}">
                                        <label for="title_en" class="placeholder">Title</label>
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu3">
                                    <label class="mt-3 mb-3"><b>Информация в русских названиях</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_ru" name="name_ru" type="text" class="form-control input-border-bottom" required value="{{ old('name_ru') }}">
                                        <label for="title_ru" class="placeholder">Заглавие</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input id="url" type="text" name="url" class="form-control" placeholder="https://dunyo.info/..." value="{{ old('url') }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="" disabled>-- select status --</option>
                                            <option value="published">Published</option>
                                            <option value="unpublished" selected>Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Parent</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="0">-- select parent --</option>
                                            @foreach($menus as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->name_cyrl }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="target">TARGET</label>
                                        <input id="target" type="checkbox" name="target" class="form-control" value="{{ old('target') }}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
