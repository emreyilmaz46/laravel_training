<html>
<head>
    <title>Yeni İleti Ekle</title>
<style>
nav {
    margin: auto;
    width: 20%;
    display: block;
    background-color: #a6e1ec;
    padding: 5px;
}
div {
    margin: auto;
    width: 20%;
    display: block;
    background-color: lightblue;
    padding: 5px;
}
    input, textarea {
        margin: 5px;
    }

</style>
</head>
<body>

<nav><p> Yeni bir ileti ekleyin:</p></nav>

<div>
    {{csrf_field()}}
    <form action="/emre/blog/kaydet">
        <input type="text" name="baslik" placeholder="İeti Başlığı Giriniz">
        <textarea name="icerik" placeholder="İçerik giriniz" rows="5" cols="30"></textarea>
        <input type="submit" value="Kaydet">

    </form>
</div>

</body>

</html>