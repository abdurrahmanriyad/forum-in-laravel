@extends('layouts.main')

@section('title', 'Home - Forum')

@section('header_css')
    {!! Html::style('assets/css/select2.min.css') !!}
@endsection

@section('main-content')
    <section class="ask_question_area"> <!--question part begin-->
        <div class="ask_question">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Title">
                </div>
                <div class="form-group">
                    <select class="js-example-basic-multiple form-control" multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="editor1" id="editor1" rows="10" cols="80">
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
