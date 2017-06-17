<html>
<head>

    <title>Güncel Blog Kayıtları</title>
<style>
#baslik {
     display: block;
     background-color: lightseagreen;
     width: 50%;
     padding: 1px;
     margin: 2px;
     border: 2px solid black;
 }
#icerik {
    display: block;
    background-color: lightcyan;
    width: 90%;
    padding: 1px;
    margin: 1px;
    border: 2px solid black;
}
li {
    display: block;
    background-color: lightgrey;
    width: 45%;
    padding: 1px;
    margin: 1px;
    border: 2px solid orange;
}

</style>
</head>

<body>
<a href="/emre/blog/ekle"><button>Yeni İleti Ekle</button></a>
<ol>
    @foreach($iletiler as $ileti)
    <li>
        <a href="{!! url("/emre/blog/{$ileti->id}") !!}"><div id="baslik">
            <p><strong>Başlık: </strong>{{ $ileti->baslik }} </p>
            <p> <em>{{$ileti->created_at->diffForHumans()}}</p></em>
        </div> </a>
        <div id="icerik">
        <p><strong>İçerik: </strong>{{ $ileti->icerik }}</p>
        </div>
    </li>
    @endforeach
</ol>

</body>

</html>