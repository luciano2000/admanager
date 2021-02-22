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
                var slot = '/251829550/retrogamer/' +canal;
