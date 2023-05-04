@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img mb-4 mb-md-0 rounded-5" src="https://placehold.co/1000x1000?text=Image" alt="..." ></div>
        <div class="col-md-6 bg-dark rounded-5 p-5 ">
            <h1 class="display-4 text">{{ $product->title }}</h1>
            <div class="fs-5 mb-5">
                <p class="text">{{ $product->price }} $</p>
            </div>
            <p class="text">{{ $product->description }}</p>
            <div class="d-flex">
                <form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-primary file-btn p-2 text-dark border-dark">Add to cart
                <i class="bi bi-cart"></i>
                </button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <hr class="custom-line">

    <div class="accordion" id="accordionPanelsStayOpen">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            System requirements
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body bg-dark text-light">
                MINIMUM:<br>
                    OS: Windows Vista SP2 or Windows 7. Windows XP is not supported<br>
                    Processor: Intel Core2 Duo E8200 2.66 GHz or AMD Phenom X3 8750 2.4 GHz<br>
                    Memory: 2 GB for 32-bit OS or 4 GB for 64-bit OS<br>
                    Graphics: Nvidia GeForce 8800GT 512 MB or ATI Radeon HD 3870 512 MB<br>
                    DirectX: Version 9.0c<br>
                    Hard Drive: 16 GB<br>
                    Sound: DirectX 11.0c compatible<br>
                    Additional: Broadband connection required for activation and multiplayer gameplay
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                More info about the game
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body bg-dark text-light">
                Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.<br>

                CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).<br>
                
                "Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999," said Doug Lombardi at Valve. "For the past 12 years, it has continued to be one of the most-played games in the world, headline competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO promises to expand on CS' award-winning gameplay and deliver it to gamers on the PC as well as the next gen consoles and the Mac."
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Other
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body bg-dark text-light">
                TITLE: {{$product -> title}}<br>
                GENRE: Action, Free to Play<br>
                DEVELOPER: Valve, Hidden Path Entertainment<br>
                PUBLISHER: Valve<br>
                RELEASE DATE: 21 Aug, 2012
            </div>
            </div>
        </div>
    </div>
</div>
@endsection