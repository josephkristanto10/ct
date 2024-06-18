<style>
.gdriveVideo {
    width: 730;
    height: 415;
}
</style>




<body>
    <p>asd</p>
    <iframe id="myframe"
        sandbox="allow-forms allow-modals allow-orientation-lock allow-pointer-lock allow-presentation allow-same-origin allow-scripts allow-top-navigation allow-top-navigation-by-user-activation"
        src="javascript:;" frameborder="0" scrolling="no" seamless=""></iframe>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('iframe').attr('src', 'https://drive.google.com/file/d/1qBrdbxwfTzzJvFlmIm-4Zl1sY7TmVENZ/preview');
    $("p").text("testes");
    var iframeUrl = document.querySelector('#myframe');
    iframeUrl.setAttribute('src', 'https://stackoverflow.com/');
});
</script>