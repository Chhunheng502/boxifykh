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

        .color-picker {
            display: inline-block;
        }

        .color-preview {
            width: 200px;
            height: 20px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
    <section class="home container">
        <h1 class="home__title">Customize your brand image</h1>
        <span style="display: none" id="company-name">{{ $companyName }}</span>
        <div class="grid" id="brand-container">
            @foreach ($fileNames as $fileName)                
                <div style="padding: 10px">
                    <img
                        style="border-radius: 10px;"
                        width="400px"
                        height="400px"
                        src="{{ asset('IMG/LOGO/'.$fileName) }}"
                        id="<?php echo $fileName; ?>"
                    >
                </div>
            @endforeach
        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2 style="margin: 10px 0">Customize image</h2>
              <div style="justify-content: space-between">
                <div id="modal-image" style="width: 50%; display: inline-block"></div>
                <h2 style="margin: 10px 0">Choose icon</h2>
                <div style="width: 50%; display: inline-block" id="icon-container">
                    <?php $icons = ['abstract-shape_5969842.png', 'pie-chart_9521469.png', 'slack_3820314.png']; ?>
                    @foreach ($icons as $icon)
                        <img
                            style="margin-right: 10px;"
                            width="40px"
                            height="40px"
                            src="{{ asset('ICON/'.$icon) }}"
                            id="<?php echo str_replace(".png", "", $icon); ?>"
                        >
                    @endforeach
                </div>
                <h2 style="margin: 10px 0">Choose color</h2>
                <div class="color-picker">
                    <input type="range" min="0" max="360" step="1" id="colorSlider">
                    <div class="color-preview"><span id="color-code"></span></div>
                </div>
                <h2 style="margin: 10px 0">Choose font</h2>
                <select id="edit-font">
                    <option value="JosefinSans-Regular.ttf">JosefinSans-Regular</option>
                    <option value="PlayfairDisplay-Regular.otf'">PlayfairDisplay-Regular</option>
                    <option value="Poppins-Regular.otf'">Poppins-Regular</option>
                    <option value="Roboto-Regular.ttf">Roboto-Regular</option>
                </select>
              </div>
              <button type="button" style="margin-top: 20px" id="download-button"> Download </button>
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
        var modal = document.getElementById("myModal");
        var openBtn = document.getElementById("openModalBtn");
        var closeBtn = document.getElementsByClassName("close")[0];

        function openModal() {
            modal.style.display = "block";
        }

        function closeModal() {
            modal.style.display = "none";
            $('#modal-image').empty();
        }

        closeBtn.addEventListener("click", closeModal);

        var colorSlider = document.getElementById("colorSlider");
        var colorPreview = document.querySelector(".color-preview");

        colorSlider.addEventListener("input", function() {
            var hue = colorSlider.value;
            var selectedColor = hslToHex(hue, 100, 50);
            $('#color-code').text(selectedColor);
            colorPreview.style.backgroundColor = selectedColor;
        });

        function hslToHex(h, s, l) {
            h /= 360;
            s /= 100;
            l /= 100;

            let r, g, b;

            if (s === 0) {
                r = g = b = l;
            } else {
                const hue2rgb = (p, q, t) => {
                if (t < 0) t += 1;
                if (t > 1) t -= 1;
                if (t < 1 / 6) return p + (q - p) * 6 * t;
                if (t < 1 / 2) return q;
                if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
                return p;
                };

                const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                const p = 2 * l - q;

                r = hue2rgb(p, q, h + 1 / 3);
                g = hue2rgb(p, q, h);
                b = hue2rgb(p, q, h - 1 / 3);
            }

            const toHex = (c) => {
                const hex = Math.round(c * 255).toString(16);
                return hex.length === 1 ? '0' + hex : hex;
            };

            const hexR = toHex(r);
            const hexG = toHex(g);
            const hexB = toHex(b);

            return `#${hexR}${hexG}${hexB}`;
        }
  </script>

  <script>
        $(document).ready(function() {
            var basePath = window.location.protocol + "//" + window.location.host;
            var imageId = null;
            var iconId = null;

            $("#brand-container img").click(function() {
                imageId = $(this).attr("id");
                openModal();
                var img = $('<img>', {
                    src: `${basePath}/IMG/LOGO/${imageId}`,
                    alt: 'My Image',
                    id: 'myImage',
                    width: 300,
                    height: 150
                });
                $('#modal-image').append(img);
            });

            $("#icon-container img").click(function() {
                $("#icon-container img").css("border", "");
                iconId = $(this).attr("id");
                $('#' + iconId).css("border", "2px solid red");
            });

            $("#download-button").click(function() {
                var data = new FormData();
                data.append('ori_image', imageId);
                data.append('text', $('#company-name').text());
                data.append('icon', iconId + '.png');
                data.append('color', $('#color-code').text());
                data.append('font', $('#edit-font').val());
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    data: data,
                    url: "{{ route('feature.brand.download') }}",
                    responseType: 'blob',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        const link = document.createElement('a');
                        link.href = basePath + '/' + response;
                        link.setAttribute('download', 'image.jpg');
                        document.body.appendChild(link);
                        link.click();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            });
        });
  </script>
@endsection
