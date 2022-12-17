@extends('layout.user.templateWelcome')

@section('login')
{{route('login.index')}}
@endsection

@section('make_report')
{{route('report.create_report')}}
@endsection