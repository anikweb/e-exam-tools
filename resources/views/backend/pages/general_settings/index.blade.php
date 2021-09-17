@extends('backend.master')
@section('content')
    <div class="content">
       <div class="row">
           <div class="col-md-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">General Settings</li>
                </ol>
              </nav>
           </div>
           <div class="col-md-11 mx-auto">
               <form action="{{ route('general-settings.update',$generalSettings->id) }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General Settings</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Site Title <span>*</span></td>
                                        <td>
                                            <input type="text" name="site_title" value="{{ generalSettings()->site_title }}" class="form-control @error('site_title') is-invalid @enderror" >
                                            @error('site_title')
                                                <div class="text-danger">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tagline <span>*</span></td>
                                        <td>
                                            <input type="text" name="tagline" value="{{ generalSettings()->tagline }}" class="form-control @error('tagline') is-invalid @enderror" >
                                            @error('tagline')
                                                <div class="text-danger">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Key Words <span>*</span></td>
                                        <td>
                                            <input type="text" name="key_word" value="{{ generalSettings()->key_word }}" class="form-control @error('key_word') is-invalid @enderror" >
                                            @error('key_word')
                                                <div class="text-danger">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Logo </td>
                                        <td>
                                            <img width="150px" src="{{ asset('backend/image/general_settings/'.generalSettings()->logo)}}" alt="logo" id="logo_preview">
                                            <input type="file" name="logo" id="logo" class="d-none" onchange="document.getElementById('logo_preview').src = window.URL.createObjectURL(this.files[0])">
                                            <label for="logo" class="btn btn-success m-2">Change</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Icon </td>
                                        <td>
                                            <img width="80px" src="{{ asset('backend/image/general_settings/'.generalSettings()->icon) }}" alt="{{ generalSettings()->icon }}" id="icon_preview">
                                            <input type="file" name="icon" id="icon" class="d-none" onchange="document.getElementById('icon_preview').src = window.URL.createObjectURL(this.files[0])">
                                            <label for="icon" class="btn btn-success m-2">Change</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Admin E-mail <span>*</span></td>
                                        <td>
                                            <input type="email" name="admin_email" value="{{ generalSettings()->admin_email }}"  class="form-control @error('admin_email') is-invalid @enderror">
                                            @error('admin_email')
                                                <div class="text-danger">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Membership</td>
                                        <td>
                                            <input  id="membership" type="checkbox" name="membership" value="2">
                                            <label for="membership">Anyone can register</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">New Default User Role <span>*</span></td>
                                        <td>
                                            <select name="default_role" id="default_role" class="form-control @error('default_role') is-invalid @enderror">
                                                <option value="subscriber">-Subscriber-</option>
                                            </select>
                                            @error('default_role')
                                                <div class="text-danger">
                                                    <i class="fa fa-exclamation-circle"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                            <button class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
                        </div>
                    </div>
                </form>
           </div>
       </div>
    </div>
@endsection
@section('footer_js')
    <script>
        @if (session('success'))
            toastr['success']("{{ session('success') }}");
        @elseif(session('error'))
            toastr['success']("{{ session('error') }}");
        @endif
    </script>
@endsection
