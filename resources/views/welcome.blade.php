<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           @import url('https://fonts.googleapis.com/css?family=DM+Sans:500,700&display=swap');

            * {
            box-sizing: border-box;
            }

            body {
            text-align: center;
            display: flex;
            height: 30vh;
            width: 100%;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/debut_light.png");
            }

            .nav {
            display: inline-flex;
            position: relative;
            overflow: hidden;
            max-width: 100%;
            background-color: #fff;
            padding: 0 20px;
            border-radius: 40px;
            box-shadow: 0 10px 40px rgba(159, 162, 177, .8);
            }

            .nav-item {
            color: #83818c;
            padding: 20px;
            text-decoration: none;
            transition: .3s;
            margin: 0 6px;
            z-index: 1;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            position: relative;
            
            &:before {
                content: "";
                position: absolute;
                bottom: -6px;
                left: 0;
                width: 100%;
                height: 5px;
                background-color: #dfe2ea;
                border-radius: 8px 8px 0 0;
                opacity: 0;
                transition: .3s;
            }
            }

            .nav-item:not(.is-active):hover:before {
            opacity: 1;
            bottom: 0;
            }


            .nav-item:not(.is-active):hover { color: #333; }

            .nav-indicator {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            transition: .4s;
            height: 5px;
            z-index: 1;
            border-radius: 8px 8px 0 0;
            }

            @media (max-width: 580px) {
            .nav { overflow: auto; }
            }
        </style>
    </head>
    <body>

        <nav class="nav">
        <a href="#" class="nav-item is-active" active-color="orange">Home</a>
        <a href="#" class="nav-item" active-color="green">About</a>
        <a href="#" class="nav-item" active-color="blue">Testimonials</a>
        <a href="#" class="nav-item" active-color="red">Blog</a>
        <a href="#" class="nav-item" active-color="rebeccapurple">Contact</a>
        <span class="nav-indicator"></span>
        </nav>

    </body>

    <script>
        const indicator = document.querySelector('.nav-indicator');
        const items = document.querySelectorAll('.nav-item');

        function handleIndicator(el) {
        items.forEach(item => {
            item.classList.remove('is-active');
            item.removeAttribute('style');
        });
        
        indicator.style.width = `${el.offsetWidth}px`;
        indicator.style.left = `${el.offsetLeft}px`;
        indicator.style.backgroundColor = el.getAttribute('active-color');

        el.classList.add('is-active');
        el.style.color = el.getAttribute('active-color');
        }


        items.forEach((item, index) => {
        item.addEventListener('click', (e) => { handleIndicator(e.target)});
        item.classList.contains('is-active') && handleIndicator(item);
        });
    </script>
</html>
