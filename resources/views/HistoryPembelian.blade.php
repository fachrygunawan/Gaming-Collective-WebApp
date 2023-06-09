<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/cart.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <title>Gative - Game Collective</title>
</head>

<body>
    @extends('Sidebar') 
    @section('content')
        <div class="back ps-5 pt-5">
            <a href="#"><span><i class='bx bx-chevron-left' ></i></span>Back</a>
        </div>
        <div class="cart-container p-5">
            <h3 style='font-weight : 700;'>History Pembelian</h3>
            <div class="product-card mt-5">
                <div class="img-product">
                    <img src="/image/gf image/fahri_GF_2.jpg" alt="">
                </div>
                <div class="product-detail ps-3 pt-2 pb-2">
                    <div class="product-name pb-1 " style='font-weight : 500;'>
                        Headset Cantik
                    </div>
                    <p>Rp3.000,00</p>
                    <span style="font-style: italic;">Selesai</span>
                </div>
            </div>
        </div>
        <script src="/cart.js" charset="utf-8"></script>
    @endsection

</body>

</html>