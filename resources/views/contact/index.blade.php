@extends('layouts/layout')
@section('title')
    Demander un Contact
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('content')

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>SDA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />


        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />



    </head>

    <body>


{{-- 
        <section class="container" style="margin-bottom: 15rem;">
            <div>
                <h1 style="font-weight: bold;font-size: 4rem;">Nous sommes là
                </h1>
                <p style="color:rgba(0, 0, 0, 0.36) ">Besoin d'un service ?</p>
                <p class="mb-4" style="font-weight: 500">
                    <span>


                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 368.666 368.666" xml:space="preserve">
                            <g id="XMLID_2_">
                                <g>
                                    <g>
                                        <path
                                            d="M184.333,0C102.01,0,35.036,66.974,35.036,149.297c0,33.969,11.132,65.96,32.193,92.515
                                                                                                                                                                                                                                                                                                                                                c27.27,34.383,106.572,116.021,109.934,119.479l7.169,7.375l7.17-7.374c3.364-3.46,82.69-85.116,109.964-119.51
                                                                                                                                                                                                                                                                                                                                                c21.042-26.534,32.164-58.514,32.164-92.485C333.63,66.974,266.656,0,184.333,0z M285.795,229.355
                                                                                                                                                                                                                                                                                                                                                c-21.956,27.687-80.92,89.278-101.462,110.581c-20.54-21.302-79.483-82.875-101.434-110.552
                                                                                                                                                                                                                                                                                                                                                c-18.228-22.984-27.863-50.677-27.863-80.087C55.036,78.002,113.038,20,184.333,20c71.294,0,129.297,58.002,129.296,129.297
                                                                                                                                                                                                                                                                                                                                                C313.629,178.709,304.004,206.393,285.795,229.355z" />
                                        <path
                                            d="M184.333,59.265c-48.73,0-88.374,39.644-88.374,88.374c0,48.73,39.645,88.374,88.374,88.374s88.374-39.645,88.374-88.374
                                                                                                                                                                                                                                                                                                                                                S233.063,59.265,184.333,59.265z M184.333,216.013c-37.702,0-68.374-30.673-68.374-68.374c0-37.702,30.673-68.374,68.374-68.374
                                                                                                                                                                                                                                                                                                                                                s68.373,30.673,68.374,68.374C252.707,185.341,222.035,216.013,184.333,216.013z" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </span>Av. du Caire, Route de M'Saken Zaouiet Sousse Tunisie
                </p>

            </div>




            <form class="row mx-0 mb-5" method="POST" action="">
                @csrf
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <!-- Nom Field -->
                        <div class="col-12 mb-2">
                            <label for="nom">Nom</label>
                            <input style="border: none; border-radius: 20px; width: 100%; background-color:#F5F5F5"
                                type="text" name="nom" id="nom" class="form-control contact-input" required>
                        </div>

                        <!-- Prénom Field -->
                        <div class="col-12 mb-2">
                            <label for="prenom">Prénom</label>
                            <input style="border: none; border-radius: 20px; width: 100%; background-color:#F5F5F5"
                                type="text" name="prenom" id="prenom" class="form-control contact-input" required>
                        </div>

                        <!-- Telephone Field -->
                        <div class="col-12 mb-2">
                            <label for="telephone">Téléphone</label>
                            <input style="border: none; border-radius: 20px; width: 100%; background-color:#F5F5F5"
                                type="text" name="telephone" id="telephone" class="form-control contact-input" required>
                        </div>

                        <!-- Email Field -->
                        <div class="col-12 mb-2">
                            <label for="email">Email</label>
                            <input style="border: none; border-radius: 20px; width: 100%; background-color:#F5F5F5"
                                type="email" name="email" id="email" class="form-control contact-input" required>
                        </div>

                        <!-- Description Field (Message) -->
                        <div class="col-12 mb-2">
                            <label for="description">Votre Message</label>
                            <textarea style="border: none; border-radius: 20px; width: 100%; background-color:#F5F5F5"
                                class="form-control contact-input input-textarea" name="description" id="description" rows="7" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="container d-flex justify-content-center mt-4">
                            <button type="submit" style="background-color: #0960AD; color: #E9EEF8; width: 100%"
                                class="btn btn-2">Envoyez ma demande</button>
                        </div>
                    </div>
                </div>
            </form>



        </section> --}}
        
       
        
          <section class="hero-section">
            <div class="container">
              <div class="content">
                <h1>Le spécialiste mondial de la formation des agents de joueurs</h1>
                <p>Nous préparons les examens d'agents FIFA, FFF, etc., aux contrats, transferts, négociations et règlements dans le monde entier.</p>
                <div class="buttons">
                  <a href="#" class="btn primary">Demander une formation</a>
                  <a href="#" class="btn secondary">En savoir plus</a>
                </div>
              </div>
              <div class="image-container">
                <img src="{{asset('image/ainedrahem.png')}}" alt="Agent professionnel" class="main-image">
              </div>
            </div>
          </section>
        
          <section class="stats-section">
            <div class="container">
              <div class="stat-box">
                <img src="agent2.png" alt="Certifié" class="stat-image">
                <div class="stat-content">
                  <h2>+70,000</h2>
                  <p>Coachs certifiés et agents formés</p>
                </div>
              </div>
              <div class="features">
                <h3>Nous fournissons des coachs sportifs de conseillers experts</h3>
                <ul>
                  <li>Coach qualifié</li>
                  <li>Experts certifiés</li>
                  <li>Formation 100% vidéo</li>
                  <li>Documents de support</li>
                </ul>
              </div>
            </div>
          </section>
       
        
    </body>
@endsection
