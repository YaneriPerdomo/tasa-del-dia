<!DOCTYPE html>
<html lang="es" class="heigh-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal | Tasa del día</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/utilities.css">
    <link rel="stylesheet" href="css/components/_header.css">
    <link rel="stylesheet" href="css/components/_cup-of-the-day.css">
    <link rel="stylesheet" href="css/components/_button.css">
    <link rel="stylesheet" href="css/components/_input.css">
    <link rel="stylesheet" href="css/components/_header.css">

    <link rel="stylesheet" href="css/layouts/_base.css">

</head>

<body class="h-100">
    <x-header logo="Tasa del día"></x-header>
    <main class="main">
        <article class="main__content cup-of-the-day container-xl">
            <br>
            <h1 class="cup-of-the-day__title"><strong>Tasa del día <small>(Venezuela)<small></strong></h1>
            <div>
                <span class="cup-of-the-day__date">
                    <?php
                    echo (ucfirst($data['datetime']['date']) . '<br>' . $data['datetime']['time']);
                    ?>
                </span>
            </div>
            <section class="row cup-of-the-day__content ">
                <div class="col-12 col-lg-5 cup-of-the-day__block">
                    <h2>BCV (Oficial)</h2>
                    <hr>
                    <div class=" w-100 flex__align-items-center--space-between">
                        <div class="">
                            $
                        </div>
                        <div class=" ">
                            <input type="number" class="cup-of-the-day__input--bcv" value="1">
                        </div>
                    </div>
                    <hr>
                    <div class=" w-100 flex__align-items-center--space-between">
                        <div class="">
                            BS </div>
                        <div class="">
                            <span class="cup-of-the-day__value--bcv" data-bs="{{ $data['monitors']['bcv']['price'] }}">
                                {{ $data['monitors']['bcv']['price'] }}
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class=" flex__align-items-center--space-between">
                        <div class="">
                            Cambio
                        </div>
                        <div class="">
                            <span class="cup-of-the-day__change--bcv">
                                @php
                                $change = $data['monitors']['bcv']['change'];
                                $price = $data['monitors']['bcv']['price'];
                                $price_old = $data['monitors']['bcv']['price_old'];
                                if ($price == $price_old) {
                                echo $change;
                                } else if ($price > $price_old) {
                                echo '+' . $change;
                                } else {
                                echo '-' . $change;
                                }
                                @endphp

                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="flex__align-items-center   flex-column">
                        <span>Última actualización</span><br>
                        <span class="cup-of-the-day__last_update--bcv">
                            {{ $data['monitors']['bcv']['last_update'] }}
                        </span>
                    </div>
                </div>
                <div class="col-12 col-lg-5 cup-of-the-day__block">
                    <h2>Paralelo</h2>
                    <hr>
                    <div class=" w-100 flex__align-items-center--space-between">
                        <div class="">
                            $
                        </div>
                        <div class="">
                            <input type="number" class="cup-of-the-day__input--parallel" value="1">
                        </div>
                    </div>
                    <hr>
                    <div class=" flex__align-items-center--space-between">
                        <div class="">
                            BS
                        </div>
                        <div class="">
                            <span class="cup-of-the-day__value--parallel" data-bs="{{$data['monitors']['enparalelovzla']['price']}}">
                                {{ $data['monitors']['enparalelovzla']['price'] }}
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class=" flex__align-items-center--space-between">
                        <div class="">
                            Cambio
                        </div>
                        <div class="">
                            <span class="cup-of-the-day__change--parallel">
                                <?php
                                $change = $data['monitors']['enparalelovzla']['change'];
                                $price = $data['monitors']['enparalelovzla']['price'];
                                $price_old = $data['monitors']['enparalelovzla']['price_old'];
                                if ($price == $price_old) {
                                    echo $change;
                                } else if ($price > $price_old) {
                                    echo '+' . $change;
                                } else {
                                    echo '-' . $change;
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="flex__align-items-center flex-column">
                        <span>Última actualización</span><br>
                        <span class="cup-of-the-day__parallel">

                            {{ $data['monitors']['enparalelovzla']['last_update'] }}
                        </span>
                    </div>
                </div>
                </div>
            </section>

        </article>
    </main>
   <x-footer parrafo=" © 2025 tasa del dia | Todos los derechos reservados | Política de privacidad | Aviso
                legal | Política de cookies | Contacto"></x-footer>
    <script src="./js/main.js" type="module">
    </script>
    <script src="./js/components/price_calculator.js" type="module">
    </script>

    <script src="./js/api/al_cambio.js" type="module"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</html>