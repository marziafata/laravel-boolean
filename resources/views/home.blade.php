@extends('layouts.app')

@section('content')
    <section id="boolean-jumbo">
        <div class="container">
            <div class="row">
                <div class="my-jumbo col-md-6">
                    <h1 class="my-jumbo-title">
                        diventa <strong>sviluppatore web</strong>
                    </h1>
                    <p class="sottotitolo">
                        Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.
                    </p>
                    <ul class="lista-jumbo">
                        <li class="lista">
                            <strong>6 mesi</strong> di corso intensivo online in diretta
                        </li>
                        <li class="lista">
                            <strong>Nessuna competenza</strong> di programmazione richiesta
                        </li>
                        <li class="lista">
                            Siamo certi del tuo successo, altrimenti <strong>ti rimborsiamo</strong>
                        </li>
                    </ul>
                </div>
                <div class="img-wrap col-md-6">
                    <img class="img-jumbo" src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="web developer">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-title', 'Homepage')
