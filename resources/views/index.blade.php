@extends('layouts.index')

@section('title', 'Купить по предзаказу Raspberry Pi 3 по доступной цене в Москве и области')
@section('description')

@section('content')
    <style>
        section {
            background-color: white;
            padding: 15px;
        }
        article {
            max-width: 800px;
            margin: 0 auto;
        }
        .head {
            text-transform: uppercase;
            font-family: 'Ubuntu', 'arial';
            text-align: center;
        }
        .price {
            /*text-align: center;*/
            font-size: 27px;
            font-weight: bold;
            color: #ea023d;
        }
    </style>
    <section>
        <article>
            <h1 class="head">Raspberry Pi 3 доступна для предзаказа по доступной цене!</h1>
            <div class="text-center">Цена: <span class="price">2900</span> руб (оплата осущетвляется по факту вручения продукта курьером или самовывозом)</div>
            <div class="content">
                <h2>Акции</h2>
                При заказе от двух raspberry, скидка 5%
                <a href="/img/raspberry-pi-3.jpg">
                    <img style="margin: 0 auto;display: block;width: 500px;" src="/img/raspberry-pi-3.jpg" alt="Raspberry Pi 3 B" title="Raspberry Pi 3 B">
                </a>
                <a href="/img/raspberry-pi-3-technical-properties.jpg">
                    <img style="margin: 0 auto;display: block;width: 500px;" src="/img/raspberry-pi-3-technical-properties.jpg" alt="Технические свойства Raspberry Pi 3 B" title="Raspberry Pi 3 B Технические свойства">
                </a>
                
                <h2>Технические характеристики</h2>
                <u>Комплектация:</u>
                <ul>
                    <li>Документация</li>
                    <li>Микрокомпьютер</li>
                </ul>

                <u>Характеристики:</u> 
                <ul>
                    <li>Тип: микрокомпьютер</li>
                    <li>Процессор: ARMv8</li>
                    <li>Количество ядер процессора: 4</li>
                    <li>Частота процессора: 1.2 ГГц</li>
                    <li>Оперативная память: LPDDR2-900 SDRAM</li>
                    <li>Объем оперативной памяти: 1 Гб</li>
                    <li>Беспроводные интерфейсы: Wi-Fi 802.11n, Bluetooth 4.1</li>
                    <li>Интерфейсы: HDMI, mini jack 3.5 mm, USB, Ethernet</li>
                    <li>Слот для карт памяти: есть, microSD</li>
                    <li>Возможность подключения дисплея: есть</li>
                    <li>Возможность подключения камеры: есть</li>
                </ul>

                <h2>Приминение (где можно использование)</h2>
                <ul>
                    <li>В обучении по информатике и электротехнике как самостоятельном так и в учебных заведениях или кружках</li>
                    <li>Сборка гаджетов
                </ul>

                
                Третье поколение популярных моделей мини-компьютеров Raspberry от компании Raspberry Pi Foundation, производительнее и быстрее в два раза по сравнению с предыдущими моделями

                Новая Raspberry Pi 3 Model B построена на базе новейшего 64-битного ARMv8 процессора Broadcom 2837 и стала еще быстрее и мощнее предыдущих моделей.
                Инженеры улучшили энергопотребление для совместимости с требовательными внешними USB-устройствами, а также прислушались к просьбам сообщества и добавили в Raspberry Pi 3 встроенные беспроводные модули Wi-Fi и Bluetooth.

                Основные качественные отличия Raspberry Pi 3 от второй версии:
                Возросшая производительность

                    4-ядерный 64-битный ARMv8 процессор нового поколения Broadcom BCM2837.
                    Частота процессора была увеличена с 900 МГц в Raspberry Pi 2 до 1.2 ГГц в Raspberry pi 3 Model B, а его производительность увеличилась на 50-60% по сравнию с Rasperry Pi 2 и в 10 раз по сравнению с первой версией.

                 
                Новые возможности подключения

                    Встроенный WiFi-модуль BCM43143.
                    Встроенный модуль Bluetooth Low Energy (BLE).

                 
                Улучшенное энергопотребление
                Новый источник питания на 2,5А (теперь с поддержкой требовательных к питанию внешних USB-устройств).
                

                <h2>Отличия от предыдущих версий Raspberry</h2>
                Отличия от второго поколения
                    В отличие от Raspberry Pi 2 новинка получила более мощный процессор, а также беспроводной модуль Wi-Fi 802.11n. Кроме того, появился и модуль Bluetooth 4.1.


                <style>
                    table {

                    }

                    table td {
                        text-align: center;
                        font-size: small;
                    }
                </style>
                <table style="width: 730px; height: 705px;" bordercolor="gray" border="1" align="left" cellspacing="0" cellpadding="5">
                    <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <strong>
                                <a href="/">
                                    <span>Raspberry Pi 3 Model B</span>
                                </a>
                            </strong>
                        </td>
                        <td><strong><a href="/"><span style="color: #000000;"><span>Raspberry Pi 2 Model B</span></span></a></strong></td>
                        <td><strong><a href="/"><span style="color: #000000;"><span>Raspberry Pi Model B+</span></span></a></strong></td>
                    </tr>
                    <tr>
                    <td><span>Процессор</span></td>
                    <td>
                    <div><span>Broadcom 2837</span></div>
                    <div><span>Quad-Core ARM Cortex-A53</span></div>
                    <div><span>64bit (1,2Ghz)</span></div>
                    </td>
                    <td>
                    <div><span>Broadcom BCM2836</span></div>
                    <div><span>4 x ARM Cortex-A7 900MHz</span></div>
                    <div><span>32bit ARMv7 Architecture @40nm</span></div>
                    </td>
                    <td>
                    <div><span>Broadcom BCM2835</span></div>
                    <div><span>ARMv6 (700MHz)</span></div>
                    </td>
                    </tr>
                    <tr>
                    <td><span>Графический процессор</span></td>
                    <td><span>1 x VideoCore IV 400MHz</span></td>
                    <td><span>1 x VideoCore IV 250MHz</span></td>
                    <td><span>Dual Core VideoCore IV® 250MHz 1080p  H.264 decode/encode  OpenGL, ES 1.1/2.0</span></td>
                    </tr>
                    <tr>
                    <td><span>Память</span></td>
                    <td><span>1GB 32bit LP-DDR2 900MHz</span></td>
                    <td><span>1GB 32bit LP-DDR2 400MHz</span></td>
                    <td><span>512MB DDR2 400MHz</span></td>
                    </tr>
                    <tr>
                    <td><span>WiFI</span></td>
                    <td><span>Встроенные 802.11b/g/n и Bluetooth 4.1</span></td>
                    <td><span>No</span></td>
                    <td><span>No</span></td>
                    </tr>
                    <tr>
                    <td><span>Flash Накопитель</span></td>
                    <td><span>Micro-SD @ 50Mhz/SDR25<br>No eMMC storage option</span></td>
                    <td><span>Micro-SD @ 50Mhz/SDR25<br>No eMMC storage option</span></td>
                    <td><span>Micro-SD @ 50Mhz/SDR25<br>No eMMC storage option</span></td>
                    </tr>
                    <tr>
                    <td><span>USB2.0 Порт</span></td>
                    <td><span>4 x USB 2.0 micro USB</span></td>
                    <td><span>4 x USB 2.0 micro USB</span></td>
                    <td><span>4 x USB 2.0 micro USB</span></td>
                    </tr>
                    <tr>
                    <td>
                    <div><span>USB2.0 Device /</span></div>
                    <div><span>OTG</span></div>
                    </td>
                    <td><span>No</span></td>
                    <td><span>No</span></td>
                    <td><span>No</span></td>
                    </tr>
                    <tr>
                    <td><span>Ethernet / LAN</span></td>
                    <td><span>10 / 100 Mbit/s</span></td>
                    <td><span>10 / 100 Mbit/s</span></td>
                    <td><span>10 / 100 Mbit/s</span></td>
                    </tr>
                    <tr>
                    <td><span>Видео выход</span></td>
                    <td><span>HDMI 1.4 / RCA / DSI</span></td>
                    <td><span>HDMI 1.4 / RCA / DSI</span></td>
                    <td><span>HDMI 1.4 / RCA / DSI</span></td>
                    </tr>
                    <tr>
                    <td><span>Аудио выход</span></td>
                    <td><span>MDMI / 3.5mm Jack / I2S</span></td>
                    <td><span>MDMI / 3.5mm Jack / I2S</span></td>
                    <td><span>MDMI / 3.5mm Jack / I2S</span></td>
                    </tr>
                    <tr>
                    <td><span>Камера вход</span></td>
                    <td><span>MIPI CSI 1080p</span></td>
                    <td><span>MIPI CSI 1080p</span></td>
                    <td><span>MIPI CSI 1080p</span></td>
                    </tr>
                    <tr>
                    <td><span>Real Time Clock</span></td>
                    <td><span>No (unless using an add-on module)</span></td>
                    <td><span>No (unless using an add-on module)</span></td>
                    <td><span>No (unless using an add-on module)</span></td>
                    </tr>
                    <tr>
                    <td><span>IR Приемник</span></td>
                    <td><span>нет (можно подключить датчик через GPIO)</span></td>
                    <td><span>нет (можно подключить датчик через GPIO)</span></td>
                    <td><span>нет (можно подключить датчик через GPIO)</span></td>
                    </tr>
                    <tr>
                    <td><span>IO Expansion</span></td>
                    <td><span>40 pin port<br>GPIO / UART / SPI / I2S</span></td>
                    <td><span>40 pin port<br>GPIO / UART / SPI / I2S</span></td>
                    <td><span>40 pin port<br>GPIO / UART / SPI / I2S</span></td>
                    </tr>
                    <tr>
                    <td><span>ADC</span></td>
                    <td><span>No (unless using an add-on board)</span></td>
                    <td><span>No (unless using an add-on board)</span></td>
                    <td><span>No (unless using an add-on board)</span></td>
                    </tr>
                    <tr>
                    <td><span>Радиатор</span></td>
                    <td><span>Optional</span></td>
                    <td><span>Optional</span></td>
                    <td><span>Optional</span></td>
                    </tr>
                    <tr>
                    <td><span>Размер</span></td>
                    <td><span>85 x 56 mm (3.35 x 2.2 inch)</span></td>
                    <td><span>85 x 56 mm (3.35 x 2.2 inch)</span></td>
                    <td><span>85 x 56 mm (3.35 x 2.2 inch)</span></td>
                    </tr>
                    <tr>
                    <td><span>Вес</span></td>
                    <td><span>42 грамма</span></td>
                    <td><span>42 грамма</span></td>
                    <td><span>42 грамма</span></td>
                    </tr>
                    <tr>
                    <td><span>Цена</span></td>
                    <td><strong><span>2900руб.</span></strong></td>
                    <td><strong><!-- <span>2990руб.</span> --></strong></td>
                    <td><strong><!-- <span>3490руб.</span> --></strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <form class="form-horizontal col-md-6" action="/order/" method="POST">
                
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Имя" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="" cols="" name="msg" placeholder="Уточнения заказа" required></textarea>
                </div>

                <button class="btn btn-default">Заказать</button>

            </form>

        </article>
    </section>
@stop