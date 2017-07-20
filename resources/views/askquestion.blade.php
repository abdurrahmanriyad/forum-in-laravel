@extends('layouts.main')

@section('title', 'Home - Forum')

@section('header_css')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('main-content')
    <section class="ask_question_area"> <!--question part begin-->
        <div class="ask_question">
            <form method="POST" action="{{ 'dashboard/user/questions' }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Title" name="title">
                </div>

                <div class="form-group">
                    {{ Form::select('tag_id', $tags , 2, ['class' => 'js-example-basic-multiple form-control', 'multiple' => 'multiple']) }}
                </div>

                <div class="form-group">
                    <textarea name="description" id="editor1" rows="10" cols="80">
                    Ask your question..
                    </textarea>
                </div>

                <button type="submit" class="btn btn-success pull-right">Post</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </section> <!--question part finished-->
@endsection

@section('footer_js')
    {!! Html::script('assets/js/select2.full.min.js') !!}
    {!! Html::script('assets/ckeditor/ckeditor.js') !!}
@endsection

@section('footer_script')
    <script>
        $(".js-example-basic-multiple").select2();
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
