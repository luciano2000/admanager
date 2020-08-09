<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172461149-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172461149-2');
</script>


<!-- Navegg -->
<script type="text/javascript">
(function(n,v,g){o='Navegg';if(!n[o]){
a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
n[o].q=n[o].q||[];n[o].q.push([this, parms])};} })
(window, document, 'https://tag.navdmp.com/universal.min.js');
window.naveggReady = window.naveggReady||[];
window.nvg44393 = new Navegg({
acc: 44393
});
</script>

<!-- AdManager -->
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
        var Tgeral = [320, 50];
        var tela = window.innerWidth;        
        if (tela >= 470 && tela < 740) { 
                Tgeral = [468, 60];
                Tnoticias = [320, 50];
        }
        else if (tela >= 740 && tela < 1080) {
                Tgeral = [728, 90];
                Tnoticias = [468, 60];

        }
        else if (tela > 1080) {
                           Tgeral = [[970, 250],[970, 90],[728, 90]];
                Tnoticias = [728, 90];

        }
        var canal = '';
        var subcanal = 'internas';

        var urlcompleta = window.location.pathname;
                if (urlcompleta == '/') {
                        canal = 'home';

                              subcanal = 'capa';

                }
                else if (urlcompleta.split('/')[1] == "categoria") {
                        canal = urlcompleta.split('/')[2];
                        subcanal = 'capa';

                }
                else {
                        canal = urlcompleta.split('/')[1];
                                           subcanal = urlcompleta.split('/')[2];
                     if (subcanal.split('html') != null){
                            subcanal = "internas-"+canal;
                      }
                }
                var slot = '/251829550/tudopixel/' +canal;

</script>

<script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
        googletag.defineSlot(slot, Tgeral, 'banner-topo').setTargeting('pos', ['1']).addService(googletag.pubads());
        if (subcanal != 'capa') {
                googletag.defineSlot(slot, [300, 600], 'banner-barra').setTargeting('pos', ['2']).addService(googletag.pubads());
                googletag.defineSlot(slot, [300, 250], 'banner-noticia').setTargeting('pos', ['3']).addService(googletag.pubads());
                googletag.defineSlot(slot, Tnoticias, 'banner-rodape').setTargeting('pos', ['4']).addService(googletag.pubads());
        } else {
    googletag.defineSlot(slot, [[336, 280],[300, 250]], 'banner-retangulo').setTargeting('pos', ['2']).addService(googletag.pubads());
        }
        googletag.pubads().enableSingleRequest();
        googletag.pubads().setTargeting('subcanal', ['capa']).setTargeting('tags', ['especiais']);
            (function(w) {
                try {
                 var name, col, persona = JSON.parse(window.localStorage.getItem("nvgpersona44393"));
                for (col in persona) {
                        name = "nvg_" + col;
                        name = name.substring(0, 10);
                         if (typeof(googletag) == "object")
                            googletag.pubads().setTargeting(name, persona[col]);
                      if (typeof(GA_googleAddAttr) == "function")
                             GA_googleAddAttr(name, persona[col]);
                 }
             } catch (e) {}

                         })(window)
                         googletag.enableServices();
        });
</script>


