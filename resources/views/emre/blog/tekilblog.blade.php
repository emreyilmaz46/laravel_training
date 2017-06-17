<html>

<head>
    <title> {{ $tekilpost->baslik }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        width: 98%;
        padding 3px;
        float:left;
    }
    #tumgorbtn {float:left;}
    #yorumbtn {float:right;}
    #yorumdiv{
        margin: auto;
        padding: 3px;
        display: none;
        background-color: white;
        border: 3px solid black;
        width: 40%;
    }
        form {
            padding: 5px;
            margin: 5px;
        }
    #yorumgoster {
        margin: auto;
        width: 40%;
        display: block;
        background-color: lightslategrey;
        color: white;
        border: 2px solid grey;
        padding: 1px;
    }
    li {
        margin: 5px auto;
        display: block;
        width: 98%;
        background-color: black;
        padding: 4px;
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
        <a href="/emre/blog/"><button id="tumgorbtn">Tüm İletileri Gör</button></a>
        <button id="yorumbtn">Yorum Ekle</button>
    </section>
</div>
<br><br>
<hr>
<br><br>
<div id="yorumdiv">
    <form action="{!! url("/emre/blog/{$tekilpost->id}") !!}" method="POST">
        {{csrf_field()}}
        <textarea placeholder="Yorumunuzu buraya giriniz" name="icerik" cols="65" rows="5"></textarea>
        <br><br><input type="submit" value="Kaydet">
    </form>

</div>

<br>
<?// TODO: Buraya eğer hiçbir comment yoksa yorumgoster div'ini göstermeme şartı eklenecek?>
<div id="yorumgoster">
    <ol>
    @foreach($tekilpost->comments as $comment)
        <li>
            <strong> {{ $comment->icerik }} </strong> ||
            <em> {{ $comment->created_at->diffForHumans() }} </em>
        </li>
    @endforeach
    </ol>
</div>

<script>

    $(document).ready(function(){

       //$('#yorumdiv').slideUp();

        var but = $('#yorumbtn').click(function() {
            $('#yorumdiv').slideDown();
        });

    });



</script>
</body>
</html>