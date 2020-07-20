@extends('layouts.app')
@section('style')
<style>
.head{
height: 100vh;
    min-height: 500px;
    background-image: url('media/night.jpeg');
    background-size: cover;
    background-position: 0px -880px;
    background-repeat: no-repeat;
}
@media screen and (max-width:600px){
  .head{
    height: 60vh;
    min-height: 100px;
    background-image: url('media/night.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
}
</style>
@endsection
@section('content')


<header class="head">
  <div class="container-fluid">
    <div class="row ">
    </div>
  </div>
</header>

<div class="container my-5 py-5">
	<div class="row">
    <div class="col-12">
    <h1 class="text-center">I Nostri Prezzi</h1>
    <hr class="bar">
  </div>
        <div class="col-md-3 mt-5">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="box-bottom" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn "><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
		<div class="col-md-9 mt-5">
       <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th class="bg30 text-white my-auto">Stagione</th>
                            <th class="bg30 text-white mx-auto">Camera con Servizi</th>
                            <th class="bg30 text-white mx-auto">Camera con Servizi e Balcone</th>
                            <th class="bg30 text-white mx-auto">Camera con Servizi e Balcone su Montagne</th>
                            <th class="bg30 text-white mx-auto">Camera con Servizi e Terrazzo Panoramico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bg30 text-white my-auto">Autunno</td>
                            <td>€ 67</td>
                            <td>€ 88</td>
                            <td>€ 112</td>
                            <td>€ 135</td>
                        </tr>
                        <tr>
                            <td class="bg30 text-white my-auto">Inverno</td>
                            <td>€ 98</td>
                            <td>€ 112</td>
                            <td>€ 132</td>
                            <td>€ 145</td>
                        </tr>
                        <tr>
                            <td class="bg30 text-white my-auto">Primavera</td>
                            <td>€ 101</td>
                            <td>€ 135</td>
                            <td>€ 146</td>
                            <td>€ 165</td>
                        </tr>
                        <tr>
                          <td class="bg30 text-white my-auto">Estate</td>
                          <td>€ 120</td>
                          <td>€ 145</td>
                          <td>€ 168</td>
                          <td>€ 180</td>
                      </tr>
                    </tbody>
                </table>   
    <div class="mt-5">
      <h5>I PREZZI VARIANO A SECONDA DEL NUMERO DI PERSONE E DELLE DISPONIBILITA'</h5>
    </div>
		</div>
	</div>
</div>
    
<div class="container py-5 my-5">
  <div class="row">
    <div class="col-12">
      <h2 class="text-left mb-0">I Prezzi Comprendono...</h2>
      <hr class="bar float-left">
      <div class="col-12 mt-5">
      <p> Nei prezzi elencati è compreso: pensione completa, acqua illimitata ai pasti, parcheggio gratuito a 1 km di distanza servito da bus/navetta 24/24h, servizio, IVA,
         SPA, sala Relax.
      </p>
      <p> Nei prezzi elencati è compreso: pensione completa, acqua illimitata ai pasti, parcheggio gratuito a 1 km di distanza servito da bus/navetta 24/24h, servizio, IVA,
        SPA, sala Relax.
     </p>
    </div>
    </div>
    <div class="col-12 mt-2">
      <h2 class="text-left mb-0">I Prezzi NON Comprendono...</h2>
      <hr class="bar float-left">
      <div class="col-12 mt-5">
      <p> Tassa di soggiorno: € 5,40 a persona al giorno per max. 7 giorni. Bambini fino a 14 anni esenti.</p>
      <p> Parcheggio in hotel + € 15,00</p>
    </div>
    </div>
    <div class="col-12 mt-3 bg10opaque">
      <h2 class="text-center mb-0 pt-5">ALL INCLUSIVE</h2>
      <hr class="bar">
      <div class="col-12 mt-5 pb-5">
      <h5 class="text-center">CAMERA CON TERRAZZO + PISCINA PRIVATA + SPA EXCLUSIVE</h5>
      <h3 class="text-center display-4 font-weight-bold"> <sup>€</sup>250</h3>
    </div>
    </div>
  </div>
</div>

@endsection