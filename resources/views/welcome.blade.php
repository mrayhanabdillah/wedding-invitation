<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khansa & Aldy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="bg-image flex items-center min-h-screen" id="overlay"
        style="background-image: url('{{ asset('gambar/pic5.png') }}">
        <div class="banner-content text-center text-white">
            <div class="max-w-md">
                <p class="mb-5 text-2xl font-bold">Dear,</p>
                <p class="text-2xl font-bold">You're Invited</p>
                <p class="mb-5 font-bold">The Wedding Celebration of</p>
            </div>
            <button class="btn-utama btn-sm mt-[15rem]" id="close-modal" onclick="playAudio()"><i class="bi bi-envelope-heart mr-1"></i>Open
                Invitation</button>
        </div>
    </div>

    <section id="content" class="hidden">
        <audio id="myAudio">
            <source src="{{ asset('lagu/lagu.mp3') }}" type="audio/mpeg">
        </audio>
        <div class="bg-imager flex items-center min-h-screen dark:text-white"
            style="background-image: url('{{ asset('gambar/pic6.png') }}">
            <div class="banner-content text-center text-white">
                <div class="max-w-md">
                    <p class="mb-5 text-2xl font-bold">Dear,</p>
                    <p class="text-2xl font-bold">You're Invited</p>
                    <p class="mb-5 font-bold">The Wedding Celebration of</p>
                </div>
            </div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#F0EBE3" fill-opacity="1"
                    d="M0,64L80,106.7C160,149,320,235,480,272C640,309,800,299,960,261.3C1120,224,1280,160,1360,128L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </div>

        <div class="container mx-auto flex justify-center text-center mt-12">
            <div class="lg:max-w-sm">
                <p class="mb-3 sm:text-xs lg:text-2xl">سْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                <p class="mb-8 sm:text-xs lg:text-2xl">“Semoga Allah menghimpun yang terserak dari keduanya, memberkati
                    mereka berdua dan kiranya Allah
                    meningkatkan kualitas keturunan mereka, menjadikannya pembuka pintu rahmat, sumber ilmu dan hikmah
                    serta
                    pemberi rasa aman bagi umat.”</p>
                <p class="text-xs">(Doa Nabi Muhammad SAW, Pada Pernikahan Putrinya Fatimah Azzahra Dengan Ali Bin Abi
                    Thalib)</p>
            </div>
        </div>

        <div class="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4 mt-2">
            <div class="mt-12">
                <div class="card w-80 lg:w-96 shadow-xl items-center text-center"
                    style="background-image: url('{{ asset('gambar/bg.jpg') }}">
                    <div class="card-body">
                        <img src="{{ asset('gambar/teteh.jpg') }}" class="profil mx-auto mb-5">
                        <a href="https://www.instagram.com/khansamadiyah/" target="_blank"
                            class="flex justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg></a>
                        <p class="text-xl">Khansa Mahdiyah Tresnajaya</p>
                        <div class="card-actions justify-center">

                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 lg:mx-12 lg:mt-48">
                <h1 class="text-6xl font-bold">&</h1>
            </div>

            <div class="mt-12">
                <div class="card w-80 lg:w-96 shadow-xl items-center text-center"
                    style="background-image: url('{{ asset('gambar/bg.jpg') }}">
                    <div class="card-body">
                        <img src="{{ asset('gambar/aldy.jpg') }}" class="profil mx-auto mb-5">
                        <a href="https://www.instagram.com/rhenaldifrds/" target="_blank"
                            class="flex justify-center mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg></a>
                        <p class="text-xl">Rhenaldi Firdaus</p>
                        <div class="card-actions justify-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>



{{-- <button class="px-3 py-1 bg-red-800 text-gray-200 hover:bg-red-600 rounded" id="close-modal">Delete</button> --}}
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const overlay = document.querySelector('#overlay')
        const content = document.querySelector('#content')
        const closeBtn = document.querySelector('#close-modal')

        const toggleModal = () => {
            overlay.classList.toggle('hidden')
            content.classList.toggle('hidden')

        }
        closeBtn.addEventListener('click', toggleModal)
    })

    var x = document.getElementById("myAudio");

    function playAudio() {
        x.play();
    }

</script>
</body>


</html>
