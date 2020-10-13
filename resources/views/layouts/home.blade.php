@extends('layouts.layout')

@section('title',Index)
    
@section('main')
<main>
  <div class="home">
    <p>SUPERBEAVER</p>
  </div>
</main>
    <div id="detail">
      <h2 class="section-title">詳細</h2>
      @foreach ($data as $key => $value)    
      <div class="flex around detail-wrap">
        <img src="/public/img/ビーバーnew.jpg" alt="">
        <h3>{{$key}}</h3>
        <p>{{$value}}</p>
      </div>
      @endforeach
    </div>
@endsection