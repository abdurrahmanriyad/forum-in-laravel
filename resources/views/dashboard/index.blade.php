@extends('dashboard.layouts.main')

@section('main_content')
    <div class="admin_content_header">
        <h3>Profile Settings</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, architecto autem </p>
    </div>
    <div class="Profile_area">

        <div class="profile"> <!-- single forum list  begin -->
            <div class="profile_basic">
                <div class="profile_img">
                    <img src="{{ url("assets/img/abdurrahman.jpg") }}" alt="" class="img-responsive">
                </div>
                <p class="profile_name">Abdur Rahman</p>
            </div>
            <div class="profile_info">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Information</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tr>
                        <td>Abdur</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>

                    <tr>
                        <td>Rahman</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>

                    <tr>
                        <td>rahman.primez@live.com</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>

                    <tr>
                        <td>First Name</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>

                    <tr>
                        <td>01813243878</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>

                    <tr>
                        <td>Programmer</td>
                        <td class="color_success"><a><i class="fa fa-edit color_success"></i></a></td>
                    </tr>


                </table>
            </div>
        </div> <!-- single forum list  finish -->
    </div>
@endsection