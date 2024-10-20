@extends('layouts.landing')

@section('content')
    <section class="py-md-8 py-6"
        style="background-image: url({{ asset('public/template') }}/assets/images/mentor/mentor-glow.svg); background-repeat: no-repeat; background-size: contain">
        <div class="container py-lg-6">
            <div class="row align-items-center gy-4 justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-md-10">
                    <div class="d-flex flex-column gap-5 text-center">
                        <div class="d-flex flex-column gap-2">
                            <h1 class="mb-0 display-2 fw-bold">
                                <span class="headingTyped text-primary"
                                    data-strings="Layanan, Online, Disdukcapil, Jayawijaya"></span>
                            </h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="position-relative d-flex overflow-x-hidden py-lg-4 pt-4">
            </div>
        </div>
    </section>

    <section class="py-lg-8 pb-6">
        <div class="container pb-lg-6">
            <div class="row justify-content-center gy-4">
                <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="{{url('/login')}}" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-success rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-briefcase text-success" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Daftar Sekarang</h3>
                                <span>Login / Registrasi</span>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="#!" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-gear text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Engineering</h3>
                                <span>21 Mentors</span>
                            </div>
                        </div>
                    </a>
                </div> --}}
                <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="#!" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-danger rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-palette2 text-danger" viewBox="0 0 16 16">
                                        <path
                                            d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a3 3 0 0 1-2.121-.879A3 3 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0M15 15v-4H9.258l-4.015 4zM0 .5v12.495zm0 12.495V13z" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Informasi</h3>
                                <span>Persyaratan dan Formulir</span>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="#!" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-info rounded-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.515 12.0001C23.5962 7.67381 25.1675 3.20256 22.9825 1.01756C20.7975 -1.16744 16.3262 0.403809 12 3.48506C7.67375 0.403809 3.2025 -1.16744 1.0175 1.01756C-1.1675 3.20256 0.403748 7.67381 3.485 12.0001C0.403748 16.3263 -1.1675 20.7976 1.0175 22.9826C1.72125 23.6863 2.66125 24.0001 3.75625 24.0001C6.06625 24.0001 9.06625 22.6038 12.0062 20.5151C14.9337 22.6038 17.9337 24.0001 20.25 24.0001C21.345 24.0001 22.2862 23.6851 22.9887 22.9826C25.1675 20.7976 23.5962 16.3263 20.515 12.0001ZM21.5687 2.43131C22.5237 3.38631 21.8787 6.48131 19.2537 10.3413C18.4233 9.31329 17.5392 8.32984 16.605 7.39506C15.6701 6.46218 14.6867 5.57929 13.6587 4.75006C17.5187 2.12506 20.6137 1.47506 21.5687 2.43131ZM18.0362 12.0001C17.1517 13.119 16.2017 14.1846 15.1912 15.1913C14.1846 16.2018 13.119 17.1518 12 18.0363C10.881 17.1518 9.81543 16.2018 8.80875 15.1913C7.79827 14.1846 6.84828 13.119 5.96375 12.0001C7.73838 9.76376 9.7637 7.73844 12 5.96381C13.119 6.84834 14.1846 7.79834 15.1912 8.80881C16.2017 9.81549 17.1517 10.8811 18.0362 12.0001ZM2.43125 2.43131C2.70625 2.15506 3.16 2.01256 3.75875 2.01256C5.23625 2.01256 7.595 2.87506 10.34 4.75006C9.31305 5.57996 8.33005 6.46283 7.395 7.39506C6.46212 8.32993 5.57923 9.31338 4.75 10.3413C2.125 6.48131 1.47625 3.38631 2.43125 2.43131ZM2.43125 21.5688C1.47625 20.6138 2.125 17.5188 4.75 13.6588C5.58044 14.6868 6.46459 15.6703 7.39875 16.6051C8.33301 17.5372 9.31518 18.4201 10.3412 19.2501C6.48125 21.8751 3.38625 22.5251 2.43125 21.5688ZM21.5687 21.5688C20.6137 22.5251 17.5187 21.8788 13.6587 19.2538C14.6862 18.4227 15.6696 17.5386 16.605 16.6051C17.5379 15.6702 18.4208 14.6867 19.25 13.6588C21.875 17.5188 22.5237 20.6138 21.5687 21.5688ZM13.5 12.0001C13.5 12.2967 13.412 12.5867 13.2472 12.8334C13.0824 13.0801 12.8481 13.2723 12.574 13.3859C12.2999 13.4994 11.9983 13.5291 11.7074 13.4712C11.4164 13.4134 11.1491 13.2705 10.9393 13.0607C10.7296 12.8509 10.5867 12.5837 10.5288 12.2927C10.4709 12.0017 10.5006 11.7001 10.6142 11.426C10.7277 11.1519 10.92 10.9177 11.1666 10.7529C11.4133 10.588 11.7033 10.5001 12 10.5001C12.3978 10.5001 12.7794 10.6581 13.0607 10.9394C13.342 11.2207 13.5 11.6022 13.5 12.0001Z"
                                            fill="#0EA5E9" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Data Science</h3>
                                <span>42 Mentors</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="#!" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-warning rounded-circle">
                                    <svg width="24" height="24" viewBox="0 0 26 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 14.6787V7.32125C21.0006 7.03737 20.9269 6.75828 20.7861 6.51177C20.6453 6.26526 20.4423 6.05994 20.1975 5.91625L13.78 2.21C13.5429 2.07308 13.2738 2.001 13 2.001C12.7262 2.001 12.4572 2.07308 12.22 2.21L5.80375 5.91625C5.55868 6.05978 5.35551 6.26503 5.21449 6.51155C5.07346 6.75807 4.99951 7.03724 5 7.32125V14.6787C4.99938 14.9626 5.07315 15.2417 5.21395 15.4882C5.35474 15.7347 5.55767 15.9401 5.8025 16.0837L12.22 19.79C12.4572 19.9268 12.7262 19.9988 13 19.9988C13.2738 19.9988 13.5428 19.9268 13.78 19.79L20.1963 16.0837C20.4413 15.9402 20.6445 15.735 20.7855 15.4884C20.9265 15.2419 21.0005 14.9628 21 14.6787ZM13 4.06875L18.0737 7L13 9.92875L7.92625 7L13 4.06875ZM7 8.77375L12 11.6612V17.3538L7 14.4662V8.77375ZM14 17.3538V11.6612L19 8.77375V14.4662L14 17.3538ZM26 1V6C26 6.26522 25.8946 6.51957 25.7071 6.70711C25.5196 6.89464 25.2652 7 25 7C24.7348 7 24.4804 6.89464 24.2929 6.70711C24.1054 6.51957 24 6.26522 24 6V2H20C19.7348 2 19.4804 1.89464 19.2929 1.70711C19.1054 1.51957 19 1.26522 19 1C19 0.734784 19.1054 0.48043 19.2929 0.292893C19.4804 0.105357 19.7348 0 20 0H25C25.2652 0 25.5196 0.105357 25.7071 0.292893C25.8946 0.48043 26 0.734784 26 1ZM7 21C7 21.2652 6.89464 21.5196 6.70711 21.7071C6.51957 21.8946 6.26522 22 6 22H1C0.734784 22 0.48043 21.8946 0.292893 21.7071C0.105357 21.5196 0 21.2652 0 21V16C0 15.7348 0.105357 15.4804 0.292893 15.2929C0.48043 15.1054 0.734784 15 1 15C1.26522 15 1.51957 15.1054 1.70711 15.2929C1.89464 15.4804 2 15.7348 2 16V20H6C6.26522 20 6.51957 20.1054 6.70711 20.2929C6.89464 20.4804 7 20.7348 7 21ZM26 16V21C26 21.2652 25.8946 21.5196 25.7071 21.7071C25.5196 21.8946 25.2652 22 25 22H20C19.7348 22 19.4804 21.8946 19.2929 21.7071C19.1054 21.5196 19 21.2652 19 21C19 20.7348 19.1054 20.4804 19.2929 20.2929C19.4804 20.1054 19.7348 20 20 20H24V16C24 15.7348 24.1054 15.4804 24.2929 15.2929C24.4804 15.1054 24.7348 15 25 15C25.2652 15 25.5196 15.1054 25.7071 15.2929C25.8946 15.4804 26 15.7348 26 16ZM0 6V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H6C6.26522 0 6.51957 0.105357 6.70711 0.292893C6.89464 0.48043 7 0.734784 7 1C7 1.26522 6.89464 1.51957 6.70711 1.70711C6.51957 1.89464 6.26522 2 6 2H2V6C2 6.26522 1.89464 6.51957 1.70711 6.70711C1.51957 6.89464 1.26522 7 1 7C0.734784 7 0.48043 6.89464 0.292893 6.70711C0.105357 6.51957 0 6.26522 0 6Z"
                                            fill="#C28135" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Product</h3>
                                <span>56 Mentors</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-2 col-md-4 col-12">
                    <!--card-->
                    <a href="#!" class="card card-border-primary rounded-4">
                        <!--card body-->
                        <div class="card-body d-flex flex-column gap-4 text-center">
                            <div>
                                <!--icon-->
                                <div class="icon-shape icon-xxl bg-light-primary rounded-circle">
                                    <svg width="24" height="24" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.2925 13.2925L4 16.5863L1.7075 14.2925C1.56764 14.1525 1.38939 14.0571 1.19531 14.0185C1.00122 13.9798 0.800033 13.9996 0.61721 14.0754C0.434387 14.1511 0.278151 14.2794 0.16828 14.444C0.0584092 14.6086 -0.000155428 14.8021 3.09801e-07 15V21C3.09801e-07 21.2652 0.105357 21.5196 0.292894 21.7071C0.48043 21.8946 0.734784 22 1 22H7C7.1979 22.0002 7.39139 21.9416 7.55598 21.8317C7.72058 21.7218 7.84887 21.5656 7.92462 21.3828C8.00038 21.2 8.02018 20.9988 7.98153 20.8047C7.94288 20.6106 7.84751 20.4324 7.7075 20.2925L5.41375 18L8.7075 14.7075C8.89514 14.5199 9.00056 14.2654 9.00056 14C9.00056 13.7346 8.89514 13.4801 8.7075 13.2925C8.51986 13.1049 8.26536 12.9994 8 12.9994C7.73464 12.9994 7.48014 13.1049 7.2925 13.2925ZM2 20V17.4137L4.58625 20H2ZM5.41375 4L7.7075 1.7075C7.84751 1.56764 7.94288 1.38939 7.98153 1.19531C8.02018 1.00122 8.00038 0.800033 7.92462 0.61721C7.84887 0.434387 7.72058 0.278151 7.55598 0.16828C7.39139 0.0584092 7.1979 -0.000155428 7 3.09801e-07H1C0.734784 3.09801e-07 0.48043 0.105357 0.292894 0.292894C0.105357 0.48043 3.09801e-07 0.734784 3.09801e-07 1V7C-0.000155428 7.1979 0.0584092 7.39139 0.16828 7.55598C0.278151 7.72058 0.434387 7.84887 0.61721 7.92462C0.800033 8.00038 1.00122 8.02018 1.19531 7.98153C1.38939 7.94288 1.56764 7.84751 1.7075 7.7075L4 5.41375L7.2925 8.7075C7.48014 8.89514 7.73464 9.00056 8 9.00056C8.26536 9.00056 8.51986 8.89514 8.7075 8.7075C8.89514 8.51986 9.00056 8.26536 9.00056 8C9.00056 7.73464 8.89514 7.48014 8.7075 7.2925L5.41375 4ZM2 4.58625V2H4.58625L2 4.58625ZM21 3.09801e-07H15C14.8021 -0.000155428 14.6086 0.0584092 14.444 0.16828C14.2794 0.278151 14.1511 0.434387 14.0754 0.61721C13.9996 0.800033 13.9798 1.00122 14.0185 1.19531C14.0571 1.38939 14.1525 1.56764 14.2925 1.7075L16.5863 4L13.2925 7.2925C13.1049 7.48014 12.9994 7.73464 12.9994 8C12.9994 8.26536 13.1049 8.51986 13.2925 8.7075C13.4801 8.89514 13.7346 9.00056 14 9.00056C14.2654 9.00056 14.5199 8.89514 14.7075 8.7075L18 5.41375L20.2925 7.7075C20.4324 7.84751 20.6106 7.94288 20.8047 7.98153C20.9988 8.02018 21.2 8.00038 21.3828 7.92462C21.5656 7.84887 21.7218 7.72058 21.8317 7.55598C21.9416 7.39139 22.0002 7.1979 22 7V1C22 0.734784 21.8946 0.48043 21.7071 0.292894C21.5196 0.105357 21.2652 3.09801e-07 21 3.09801e-07ZM20 4.58625L17.4137 2H20V4.58625ZM21.3825 14.0763C21.1998 14.0005 20.9987 13.9805 20.8047 14.019C20.6107 14.0575 20.4324 14.1527 20.2925 14.2925L18 16.5863L14.7075 13.2925C14.5199 13.1049 14.2654 12.9994 14 12.9994C13.7346 12.9994 13.4801 13.1049 13.2925 13.2925C13.1049 13.4801 12.9994 13.7346 12.9994 14C12.9994 14.2654 13.1049 14.5199 13.2925 14.7075L16.5863 18L14.2925 20.2925C14.1525 20.4324 14.0571 20.6106 14.0185 20.8047C13.9798 20.9988 13.9996 21.2 14.0754 21.3828C14.1511 21.5656 14.2794 21.7218 14.444 21.8317C14.6086 21.9416 14.8021 22.0002 15 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V15C22 14.8022 21.9413 14.6089 21.8314 14.4445C21.7214 14.28 21.5652 14.1519 21.3825 14.0763ZM20 20H17.4137L20 17.4137V20Z"
                                            fill="#754FFE" />
                                    </svg>
                                </div>
                            </div>
                            <!--content-->
                            <div>
                                <h3 class="mb-0">Explore All</h3>
                                <span>700+ Mentors</span>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
    <!--Explore category-->
    <!--Session away-->
    {{-- <section class="py-6 py-lg-8 bg-light">
        <div class="container py-lg-6">
            <!--row-->

            <!--row-->
            <div class="row g-4">

                <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <!--img-->
                            <a href="mentor-single.html">
                                <img src="{{ asset('public/template') }}/assets/images/mentor/mentor-img-1.jpg"
                                    alt="mentor 1" class="img-fluid w-100 rounded-4" />
                            </a>
                            <!--content-->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0">
                                                <a href="mentor-single.html" class="text-reset">Akshay Sharma</a>
                                            </h3>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-patch-check-fill text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">Software Engineer</span>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>@ Microsoft</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>5yrs Exp.</span>
                                        </div>
                                        <div class="d-flex gap-1 align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>

                                            <span class="fw-bold text-dark">5.0</span>
                                            <span>(12 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div>
                                        <span>Starting from</span>
                                        <div class="d-flex flex-row gap-1 align-items-center">
                                            <h4 class="mb-0">$25.00</h4>
                                            <span class="fs-6">/ Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#signupModal">Book a Free Trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <div class="position-relative">
                                <!--img-->
                                <a href="mentor-single.html">
                                    <img src="{{ asset('public/template') }}/assets/images/mentor/mentor-img-2.jpg"
                                        alt="mentor 2" class="img-fluid w-100 rounded-4" />
                                </a>
                                <div class="position-absolute bottom-0 left-0 p-3">
                                    <span class="badge text-bg-success">New Mentor</span>
                                </div>
                            </div>
                            <!--content-->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Andrew
                                                    Lupien</a></h3>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-patch-check-fill text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">Quality Assurance Eng</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>@ Amazon</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>3 yrs Exp.</span>
                                        </div>
                                        <div class="d-flex gap-1 align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <span class="fw-bold text-dark">0</span>
                                            <span>(0 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div>
                                        <span>Starting from</span>
                                        <div class="d-flex flex-row gap-1 align-items-center">
                                            <h4 class="mb-0">$15.00</h4>
                                            <span class="fs-6">/ Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#signupModal">Book Sessions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <!--img-->
                            <a href="mentor-single.html">
                                <img src="{{ asset('public/template') }}/assets/images/mentor/mentor-img-3.jpg"
                                    alt="mentor 3" class="img-fluid w-100 rounded-4" />
                            </a>
                            <!--content-->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Bernice
                                                    Perry</a></h3>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-patch-check-fill text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">Senior Business Analyst</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>@ InstaCart</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>3 yrs Exp.</span>
                                        </div>
                                        <div class="d-flex gap-1 align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <span class="fw-bold text-dark">5.0</span>
                                            <span>(12 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div>
                                        <span>Starting from</span>
                                        <div class="d-flex flex-row gap-1 align-items-center">
                                            <h4 class="mb-0">$85.00</h4>
                                            <span class="fs-6">/ Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#signupModal">Book Sessions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                        <div class="p-3 d-flex flex-column gap-3">
                            <!--img-->
                            <a href="mentor-single.html">
                                <img src="{{ asset('public/template') }}/assets/images/mentor/mentor-img-4.jpg"
                                    alt="mentor 4" class="img-fluid w-100 rounded-4" />
                            </a>
                            <!--content-->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-2">
                                    <div>
                                        <div class="d-flex align-items-center gap-2">
                                            <h3 class="mb-0"><a href="mentor-single.html" class="text-reset">Patrice
                                                    Long</a></h3>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-patch-check-fill text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span class="text-gray-800">Senior Data Engineer</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between fs-6">
                                        <div>
                                            <span>@ Zoom</span>
                                            <div class="vr mx-2 text-gray-200"></div>
                                            <span>7 yrs Exp.</span>
                                        </div>
                                        <div class="d-flex gap-1 align-items-center lh-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                fill="currentColor" class="bi bi-star-fill text-warning"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <span class="fw-bold text-dark">5.0</span>
                                            <span>(22 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <div>
                                        <span>Starting from</span>
                                        <div class="d-flex flex-row gap-1 align-items-center">
                                            <h4 class="mb-0">$75.00</h4>
                                            <span class="fs-6">/ Month</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                            data-bs-target="#signupModal">Book Sessions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--Session away-->
    <!--Easy steps-->

    <!--Call to action-->
@endsection
