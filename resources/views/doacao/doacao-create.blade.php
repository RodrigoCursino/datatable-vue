@extends('layout.app')

@section('content')
    <top-header title="Doações" sub-title="gerenciamento"></top-header>
    <section class="content">
        <div class="row">
            <div class="col-lg-5">
              <doador-cadastro></doador-cadastro>
            </div>
            <div class="col-lg-7">
              <doacoes-list></doacoes-list>
            </div>
        </div>
    </section>
@endsection
