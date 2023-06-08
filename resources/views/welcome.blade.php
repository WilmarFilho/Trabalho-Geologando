@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class='topo row col-12 text-white mt-5'>
        
            <div class='mt-5 flex-column col-md-6 col-10 d-flex align-items-center'>
                
                <h1 class='text-center'>
                    Headline <br>(Texto chamativo para o seu produto)
                </h1> 

                <iframe width="90%" height="80%" src="https://www.youtube.com/embed/CLty1tR9foU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
            </div>

            <div class='d-none d-md-flex align-items-center col-md-6 d-flex justify-content-center'>
        
                <img src='assets/foto.png'>

            </div>

        </div>

        <div id='explicação' class='text-white row col-12 justify-content-center fundo'>

            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>Solução</h2>
                <p>Texto para compartilhar a solução que o produto vai oferecer para o lead</p>
            </div>
        
        </div>

        <div id='evidencia' class='text-white row col-12 justify-content-center'>

            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>Evidencia</h2>
                <p>Texto para compartilhar alguma evidencia que o produto realmente oferece a solução falada</p>
            </div>
        
        </div>

        <div id='prova-social' class='text-white row col-12 justify-content-center fundo'>

            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>Prova social</h2>
                <p>Texto para compartilhar provas socias de alunos que já compraram o produto</p>
            </div>

        </div>

        <div id='oferta' class='text-white row col-12 justify-content-center'>
        
            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>Oferta</h2>
                <p>Texto para falar da oferta do produto, beneficios e etc</p>
            </div>
        
        </div>

        <div id='quebra-objeções' class='text-white row col-12 justify-content-center fundo'>
        
            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>Quebra de Objeções</h2>
                <p>Texto para quebrar objeções como garantia e etc</p>
            </div>
        
        </div>

        <div id='faq' class='text-white row col-12 justify-content-center'>
        
            <div class='d-flex flex-column col-9 justify-content-center align-items-center'>
                <h2>FAQ</h2>
                <p>Texto para compartilhar as principais perguntas do seu lead</p>
            </div>
        
        </div>
    </div>


</div>
@endsection
