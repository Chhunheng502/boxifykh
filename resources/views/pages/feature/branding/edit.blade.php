@extends('layout.master')

@section('css')
    <style>
        /* Add your CSS styling here */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            /* Adjust the gap according to your preference */
        }

        .grid .steps__card {
            border: 1px solid #ccc;
            /* Add a border for better visibility */
            padding: 20px;
            border-radius: 10px;
        }

        /* Modal styles */
        .modal {
            display: none; /* Hide the modal by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <section class="home container">
        <h1 class="home__title">Design Your Own Brand Identity</h1>
        <div class="grid">
            @foreach ($fileNames as $fileName)           
                <div style="padding: 10px">
                    <img
                        style="border-radius: 10px;"
                        width="400px"
                        height="400px"
                        src="{{ asset('IMG/LOGO/'.$fileName) }}"
                        id="$fileName"
                    >
                </div>
            @endforeach
        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Modal Title</h2>
              <p>This is the modal content.</p>
            </div>
          </div>
    </section>
@endsection

@section('js')
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="{{ asset('JS/main.js') }}"></script>

    <script>
          // JavaScript
        var images = document.getElementsByTagName("img"); // Get all image elements

            for (var i = 0; i < images.length; i++) {
            images[i].addEventListener("click", function() {
                var imageId = this.id;
                alert("Image clicked! ID: " + imageId);
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
            });
        }
    </script>
@endsection
