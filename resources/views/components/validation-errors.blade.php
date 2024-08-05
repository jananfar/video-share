@if ($errors->any())
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" style="padding-right: 30px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
