@extends('sectiondemo.index')

@section('title', '首頁')

@section('content')
<p>歡迎來到首頁！</p>
@endsection

@section('footer')
@parent
<!-- 保留父佈局中的內容 -->
<p>聯絡我們：info@example.com</p>
@endsection