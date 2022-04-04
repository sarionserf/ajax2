let arrayNews = []
let contador = 0
addEventListener('load', () => {


    let Interval =  setInterval(descarregarArxiu , 5000);


    let botoAturar = document.getElementById("aturar")
    botoAturar.addEventListener('click', (ev) => {
        clearInterval(Interval);
    })

   let botoAnterior = document.getElementById("anterior")
    if (contador === 1){
        botoAnterior.disabled = false;
    }
    botoAnterior.addEventListener('click', (ev) => {
        clearInterval(Interval);
        if (contador > 0){
            let div = document.getElementById("ticker")
            div.innerHTML = arrayNews[--contador]
        }
    } )


    let botoSeguent =document.getElementById("seguent")
    botoSeguent.addEventListener('click', (ev)=>{
        clearInterval(Interval);
        if (contador < arrayNews.length -1){
            let div = document.getElementById("ticker")
            div.innerHTML = arrayNews[++contador]
        }
    })
})




function descarregarArxiu() {
    let peticio_http = null;
    if (window.XMLHttpRequest) {
        peticio_http = new window.XMLHttpRequest();
    } else if (window.ActiveXObject) {
        peticio_http = new window.ActiveXObject("Microsoft.XMLHTTP");
    }
    peticio_http.onreadystatechange = function () {
        // console.log(peticio_http.readyState);
        if (peticio_http.readyState === 4) {
            if (peticio_http.status === 200) {
                var fechaHora = new Date();
                var hora = fechaHora.getHours().toString() + ":" + fechaHora.getMinutes().toString() + ":" + fechaHora.getSeconds().toString();
                let div = document.getElementById("ticker")
                arrayNews.push(peticio_http.responseText)
                div.style.backgroundColor = '#FFFF99';
                setTimeout(limpiaTicker, 300);
                div.innerHTML = arrayNews[arrayNews.length -1]+" "+ hora
                ++contador;
                console.log(contador)
            }
        }
    };

    function limpiaTicker(){
        var ticker = document.getElementById('ticker');
        ticker.style.backgroundColor = '#FAFAFA';
    }
    // Per últim realitzem la petició HTTP
    peticio_http.open('GET', '../servidor/generarContinguts.php', true);
    peticio_http.send(null);

}


