@extends('layouts.nav')
@section('title')
        <li class="nav-item active">
            <a class="nav-link" href="#">クッキングチャレンジ<span class="sr-only">(current)</span></a>
        </li>
@endsection
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 img-section text-center my-5">
        　<div class="youtube-wrapper">
            <iframe src="https://www.youtube.com/embed/aBKLf04pRbw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-12 article-section">
          <div class="article-header d-flex justify-content-between border-bottom border-secondary mb-4">
            <h4 class="mb-1">ピザトースト</h4>
          </div>
          <div class="container-fluid mb-3">
            <div class="row justify-content-between">
              <div class="col-sm-5">
                <h5 class="cook_instruction_header"><span class="border_left_style"></span> 材料（1食分）<span class="underline_style"></span></h5>
                <ul class="list-unstyled list_fs">
                  <li class="d-flex justify-content-between">・ 食パン<span>45.00g</span></li>
                  <li class="d-flex justify-content-between">・ トマトケチャップ<span>12.00g</span></li>
                  <li class="d-flex justify-content-between">・ ベーコン<span>5.00g</span></li>
                  <li class="d-flex justify-content-between">・ 玉ねぎ<span>15.00g</span></li>
                  <li class="d-flex justify-content-between">・ ピーマン<span>5.00g</span></li>
                  <li class="d-flex justify-content-between">・ チーズ<span>8.00g</span></li>
                </ul>
              </div>
              <div class="col-sm-5">
                <h5 class="cook_instruction_header"><span class="border_left_style"></span> 作り方<span class="underline_style"></span></h5>
                <ul class="list-unstyled list_fs">
                  <li class="d-flex">1. <span class="ml-2">べーこんは短冊切り、玉ねぎ、ピーマンはスライスにする。</span></li>
                  <li class="d-flex">2. <span class="ml-2">玉ねぎを電子レンジ500wで1分加熱する。</span></li>
                  <li class="d-flex">3. <span class="ml-2">食パンにケチャップを塗る。</span></li>
                  <li class="d-flex">4. <span class="ml-2">③にチーズ、玉ねぎ、ベーコン、ピーマンの順にトッピングする。</span></li>
                  <li class="d-flex">5. <span class="ml-2">トースターで5分焼く。</span></li>
                  <li class="d-flex">6. <span class="ml-2">食べやすい大きさに切る。</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
