@extends('layouts.app')

@section('content')
<div class="container">
<section class="painel-cards-acessados">
      <p class="title-acessados">Mais acessadas</p>

      <div class="card">

        <div class="cards">
          <a href="#">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="burger">
          <p class="title-cards">Triplo bacon burger</p>
          <p class="autor-cards">por Jorge Relato</p>
            <div class="img-play-hover">
            <img src="https://img.icons8.com/carbon-copy/2x/play.png" alt="burger">
            </div>
            </a>
        </div>

        <div class="cards">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="pizza">
          <p class="title-cards">Pizza 4 estações</p>
          <p class="autor-cards">por Fabiana Melo</p>
        </div>

        <div class="cards">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="espaguete">
          <p class="title-cards">Espaguete ao alho</p>
          <p class="autor-cards">por Júlia Kinoto</p>
        </div>

        <div class="cards">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="lasanha">
          <p class="title-cards">Lasanha mac n’ cheese</p>
          <p class="autor-cards">por Juliano Vieira</p>
        </div>

        <div class="cards">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="doce">
          <p class="title-cards">Docinhos pão-do-céu</p>
          <p class="autor-cards">por Ricardo Golvea</p>
        </div>

        <div class="cards">
          <img src="https://images3.alphacoders.com/954/954241.jpg" alt="asinhas de frango">
          <p class="title-cards">Asinhas de frango ao barbecue</p>
          <p class="autor-cards">por Vania Steroski</p>
        </div>

      </div>

    </section>
</div>
@endsection