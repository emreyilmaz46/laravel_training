<html>

<head>
    <title> {{ $tekilpost->baslik }}</title>
    <style>
    #alan {
        margin: 10px auto;
        display: block;
        background-color: lightseagreen;
        color: white;
        width: 60%;
        padding: 5px;
    }
    #baslik {
        margin: auto;
        display: block;
        background-color: lightcyan;
        color: black;
        width: 98%;
        padding: 5px;
        border: 3px solid black;
    }
    #icerik {
        margin: auto;
        display: block;
        background-color: lightsteelblue;
        color: black;
        width: 98%;
        padding: 5px;
        border: 3px solid orange;
    }
    #buton {
        margin:15px auto;
        display: block;

        padding 3px;
        float:left;
    }
    </style>
</head>
<body>

<div id="alan">

    <section id="baslik">
        <p><h1> {{ $tekilpost->baslik }} </h1> <h5><em>({{$tekilpost->created_at->diffForHumans()}})</em></h5></p>
    </section>
    <section id="icerik">
        <p><h1> {{ $tekilpost->icerik }} </h1></p>
    </section>
    <section id="buton">
        <a href="/emre/blog/"><button>Tüm İletileri Gör</button></a>
    </section>
</div>

</body>
</html>