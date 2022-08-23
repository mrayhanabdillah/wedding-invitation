<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khansa & Aldy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://khansaaldy.herokuapp.com/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <div class="bg-image flex items-center min-h-screen" id="overlay">
        <svg class="waves2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
        <div class="banner-content text-center text-white">
            <div class="max-w-md">
                <p class="mb-5 text-2xl font-bold">Dear,</p>
                <p class="text-2xl font-bold">You're Invited</p>
                <p class="mb-5 font-bold">The Wedding Celebration of</p>
            </div>
            <button class="btn-utama btn-sm mt-[15rem]" id="close-modal" onclick="playAudio()"><i
                    class="bi bi-envelope-heart mr-1"></i>Open
                Invitation</button>
        </div>
        <svg class="waves1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>

    <section id="content" class="hidden">
        <audio id="myAudio">
            <source src="{{ asset('lagu/lagu.mp3') }}" type="audio/mpeg">
        </audio>
        <div class="bg-imager flex items-center min-h-screen dark:text-white"
            style="background-image: url('{{ asset('foto/DSC00007.jpg') }}">
            <div class="banner-content text-center text-white">
                <div class="max-w-md">
                    <p class="mb-5 text-2xl font-bold">Dear,</p>
                    <p class="text-2xl font-bold">You're Invited</p>
                    <p class="mb-5 font-bold">The Wedding Celebration of</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto flex justify-center text-center mt-12">
            <div class="lg:max-w-sm">
                <img src="{{ asset('gambar/diamond.png') }}" height="50" width="50" class="mx-auto mb-5">
                <p class="mb-3 sm:text-xs lg:text-2xl">سْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                <p class="mb-8 sm:text-xs lg:text-2xl">“Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                    pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya,
                    dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar
                    terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
                    ”</p>
                <p class="sm:text-md lg:text-3xl font-bold">(Ar-Rum 21)</p>
            </div>
        </div>

        <div class="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:items-stretch items-center gap-4 mt-2">
            <div class="mt-12">
                <div class="card w-80 lg:w-96 shadow-xl items-center text-center" style="background-color:#04293A;">
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
                <div class="card w-80 lg:w-96 shadow-xl items-center text-center" style="background-color:#04293A;">
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

        <div class="container mx-auto flex justify-center items-center text-center mt-12">
            <div class="lg:max-w-sm">
                <p class="mb-8 sm:text-xs lg:text-2xl">Dengan rahmat dan ridho Allah Subhanahu Wa Ta'ala,
                    perkenankanlah
                    kami mengundang Bapak/Ibu/Saudara/i untuk hadir diacara pernikahan kami yang akan dilaksanakan pada
                    :</p>
            </div>
        </div>
        <div class="bg-imager flex min-h-screen dark:text-white"
            style="background-image: url('{{ asset('foto/DSC00028.jpg') }}">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#304555" fill-opacity="1"
                    d="M0,64L48,96C96,128,192,192,288,213.3C384,235,480,213,576,181.3C672,149,768,107,864,80C960,53,1056,43,1152,42.7C1248,43,1344,53,1392,58.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
                </path>
            </svg>
            <div class="banner-content flex items-center text-center text-white">
                <div class="max-w-md">
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path
                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path
                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <p class="mt-5 mb-5  text-2xl font-bold">Wedding Dinner</p>
                    <p class="mb-3 font-bold">Sabtu, 27 Agustus 2022</p>
                    <p class="mb-3 font-bold">08:00 WIB s/d Selesai</p>
                    <p class="font-bold">Hotel Citarum</p>
                    <p class="mb-5 font-bold">Jalan Citarum No. 16, Bandung, West Java</p>
                    <p class="font-bold">MAPS</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.8853967750665!2d107.62294006347656!3d-6.904305934906006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b4f2cd312f%3A0x1abda89ff6e190d4!2sCitarum%20Hotel!5e0!3m2!1sen!2sid!4v1661180771847!5m2!1sen!2sid"
                        width="350" height="200" style="border:0;" allowfullscreen="True" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <svg class="waves1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#304555" fill-opacity="1"
                    d="M0,128L48,112C96,96,192,64,288,74.7C384,85,480,139,576,144C672,149,768,107,864,101.3C960,96,1056,128,1152,154.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
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
