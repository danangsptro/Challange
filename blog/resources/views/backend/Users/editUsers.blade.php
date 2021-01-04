@extends('backend.dasboardAdmin.masterBackend')
@section('title', 'Admin | Edit-Data Users')

@section('backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Category</h1>
        <br>
        <form action="{{ route('users-update', $EditdataUser->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{ $EditdataUser->id }}}}">
                <label for="nama"><strong>nama</strong></label>
                <input type="text" class="form-control" name="nama" value="{{ $EditdataUser->nama }}">
                @if ($errors->has('nama'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="umur"><strong>Umur</strong></label>
                <input type="text" class="form-control" name="umur" value="{{ $EditdataUser->umur }}">
                @if ($errors->has('umur'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('umur') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="alamat"><strong>Alamat</strong></label>
                <input type="text" class="form-control" name="alamat" value="{{ $EditdataUser->alamat }}">
                @if ($errors->has('alamat'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email"><strong>Email</strong></label>
                <input type="text" class="form-control" name="email" value="{{ $EditdataUser->email }}">
                @if ($errors->has('email'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('table-dataUsers') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
