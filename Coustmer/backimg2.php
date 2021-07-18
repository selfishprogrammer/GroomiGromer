<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider1 CSS</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="slider1 my-1">
        <figure>
            <div class="slide1">
                <h1 class="shadow-sm">Groomi Gromer</h1>
                <img src="../Image/back5.jpg" alt="">
            </div>
            
        </figure>
    </div>

</body>

</html>


<style>


*{
    margin: 0;
    padding: 0;
}

.slider1{
    width: 100%;
    height: 500px;
    overflow: hidden;
}

figure{
    position: relative;
    left: 0;
    width: 400%; /* width dikali slide1 */
    animation: 10s slide1 infinite;
}

.slide1{
    position: relative;
    width: 25%; /* width dibagi slide1 */
    float: left;
}

.slide1 h1{
    position: absolute;
    font-size: 3em;
    width: 100%;
    text-align: center;
    margin-top: 50px;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.slide1 img{
    width: 100%;
    height: 500px;
}

@keyframes slide1{
    0%{
        left:0;
    }
    10%{
        left:0;
    }
    20%{
        left:-100%;
    }
    30%{
        left:-100%;
    }
    40%{
        left:-200%;
    }
    50%{
        left:-200%;
    }
    55%{
        left:-300%;
    }
    65%{
        left:-300%;
    }
    66%{
        left:-200%;
    }
    74%{
        left:-200%;
    }
    75%{
        left:-100%;
    }
    85%{
        left:-100%;
    }
    90%{
        left:0;
    }
    1000%{
        left:0;
    }
}
</style>