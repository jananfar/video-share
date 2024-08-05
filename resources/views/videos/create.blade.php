<x-layout>
    <x-slot name="content">
        <div id="upload">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-title">
                        <span>@lang('videos.create.upload')</span>
                        @lang('videos.create.film')
                    </h1>
                    <form action="{{ route('videos.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>@lang('videos.create.title')</label>
                                <input type="text" name="title" class="form-control" placeholder="@lang('videos.create.title')"
                                    value="{{ old('title') }}">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.create.length')</label>
                                <input type="number" name="length" class="form-control"
                                    placeholder="@lang('videos.create.length')" value="{{ old('length') }}">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.create.slug')</label>
                                <input type="text" name="slug" class="form-control"
                                    placeholder="@lang('videos.create.slug')" value="{{ old('slug') }}">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.create.url')</label>
                                <input type="text" name="url" class="form-control"
                                    placeholder="@lang('videos.create.url')" value="{{ old('url') }}">
                            </div>
                            <div class="col-md-6">
                                <label>@lang('videos.create.thumbnail')</label>
                                <input type="text" name="thumbnail" class="form-control"
                                    placeholder="@lang('videos.create.thumbnail')" value="{{ old('thumbnail') }}">
                            </div>
                            <div class="col-md-12">
                                <label>@lang('videos.create.description')</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="@lang('videos.create.description')">{{ old('description') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <button type="sumbit" id="contact_submit"
                                    class="btn btn-dm">@lang('videos.create.save')</button>
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
        <x-validation-errors></x-validation-errors>
    </x-slot>
</x-layout>
