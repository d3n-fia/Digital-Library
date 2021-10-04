@extends('frontend.templates.default')

@section('content')
<div class="container">
      <h2>Galeri Buku</h2>
       <blockquote>
            <p class="flow-text">Koleksi buku yang bisa kamu baca & pinjam</p>
        </blockquote>
            <div class="row">
            <div class="col s12 m6">
                <h4 class="header">Horizontal Card</h4>
            <div class="card horizontal hoverable">
                <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action">
                    <a href="#">This is a link</a>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <ul class="pagination center">
     <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

@endsection
