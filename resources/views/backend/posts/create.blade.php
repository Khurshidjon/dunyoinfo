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
                    <a href="#">POSTS</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Datatables</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD NEW POST</h4>
                    </div>
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <input id="title_uz" name="title_uz" type="text" class="form-control input-border-bottom" required>
                                        <label for="title_uz" class="placeholder">Sarlavha</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="description_uz" name="description_uz" type="text" class="form-control input-border-bottom" required></textarea>
                                        <label for="description_uz" class="placeholder">Tavsifi</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="body_uz" name="body_uz" class="form-control input-border-bottom" required></textarea>
                                        {{-- <label for="body_uz" class="placeholder">Matn</label> --}}
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu1">
                                    <label class="mt-3 mb-3"><b>Ўзбек тилидаги маълумотлар</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_cyrl" name="title_cyrl" type="text" class="form-control input-border-bottom">
                                        <label for="title_cyrl" class="placeholder">Сарлавҳа</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="description_cyrl" name="description_cyrl" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="description_cyrl" class="placeholder">Тавсифи</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="body_cyrl" name="body_cyrl" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="body_cyrl" class="placeholder">Матн</label>
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu2">
                                    <label class="mt-3 mb-3"><b>Information in English Titles</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_en" name="title_en" type="text" class="form-control input-border-bottom">
                                        <label for="title_en" class="placeholder">Title</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="description_en" name="description_en" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="description_en" class="placeholder">Description</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="body_en" name="body_en" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="body_en" class="placeholder">Text</label>
                                    </div>
                                </div>
                                <div class="tab-pane container-fluid fade" id="menu3">
                                    <label class="mt-3 mb-3"><b>Информация в русских названиях</b></label>
                                    <div class="form-group form-floating-label">
                                        <input id="title_ru" name="title_ru" type="text" class="form-control input-border-bottom">
                                        <label for="title_ru" class="placeholder">Заглавие</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="description_ru" name="description_ru" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="description_ru" class="placeholder">Описание</label>
                                    </div>
                                    <div class="form-group form-floating-label">
                                        <textarea id="body_ru" name="body_ru" type="text" class="form-control input-border-bottom"></textarea>
                                        <label for="body_ru" class="placeholder">Текст</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="status" id="" class="form-control">
                                            <option value="" disabled>-- select status --</option>
                                            <option value="published">Published</option>
                                            <option value="unpublished" selected>Unpublished</option>
                                        </select>
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
<script>
    var config = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    }
    CKEDITOR.replace('body_uz', config);
    CKEDITOR.replace('body_cyrl', config);
    CKEDITOR.replace('body_en', config);
    CKEDITOR.replace('body_ru', config);
</script>
@endsection