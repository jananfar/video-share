<x-layout>
    <x-slot name="content">
        <div id="upload">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-title">
                        <span>آپلود</span>
                        فیلم
                    </h1>
                    <form action="{{ route('videos.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>عنوان</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان">
                            </div>
                            <div class="col-md-6">
                                <label>مدت زمان</label>
                                <input type="number" name="length" class="form-control" placeholder="مدت زمان">
                            </div>
                            <div class="col-md-6">
                                <label>نام یکتا</label>
                                <input type="text" name="slug" class="form-control" placeholder="نام یکتا">
                            </div>
                            <div class="col-md-6">
                                <label>آدرس ویدیو</label>
                                <input type="text" name="url" class="form-control" placeholder="آدرس ویدیو">
                            </div>
                            <div class="col-md-6">
                                <label>تصویر بندانگشتی</label>
                                <input type="text" name="thumbnail" class="form-control"
                                    placeholder="تصویر بندانگشتی">
                            </div>
                            <div class="col-md-12">
                                <label>توضیحات</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="توضیح"></textarea>
                            </div>
                            <div class="col-md-6">
                                <button type="sumbit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/upload-adv.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
