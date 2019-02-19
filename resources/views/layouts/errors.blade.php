@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <u1>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </u1>
        </div>
    </div>
@endif