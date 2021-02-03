function clkShiteki(i) {
    let chk = document.getElementById('shiteinai' + i).checked;
    let services = document.getElementsByClassName('service' + i);

    for (let index = 0; index < services.length; index++) {
        const checkbox = services[index];
        checkbox.disabled = chk; // true　非活性　false 活性
    }
}

search(); // 15行目をよみこむ
function search() {
    // セレクトボックスの値を取得
    let selected = document.getElementById('searchbox').value;
    let shatsuArea = document.getElementById('shatsuArea');
    let kimonoArea = document.getElementById('kimonoArea');
    let suitArea = document.getElementById('suitArea');
    let zakkaArea = document.getElementById('zakkaArea');
    switch (selected) {
        case 'shatsu':
            //　表示非表示の設定
            shatsuArea.style.display = "inline";
            kimonoArea.style.display = "none";
            suitArea.style.display = "none";
            zakkaArea.style.display = "none";
            break;
        case 'kimono':
            //　表示非表示の設定
            shatsuArea.style.display = "none";
            kimonoArea.style.display = "inline";
            suitArea.style.display = "none";
            zakkaArea.style.display = "none";
            break;
        case 'suit':
            //　表示非表示の設定
            shatsuArea.style.display = "none";
            kimonoArea.style.display = "none";
            suitArea.style.display = "inline";
            zakkaArea.style.display = "none";
            break;
        case 'zakka':
            //　表示非表示の設定
            shatsuArea.style.display = "none";
            kimonoArea.style.display = "none";
            suitArea.style.display = "none";
            zakkaArea.style.display = "inline";
            break;
    }
}

selectTodofuken();

function selectTodofuken() {
    let preCode = $('#todofuken').val();
    $("#shikuchoson").html('');
    $.getJSON("https://www.land.mlit.go.jp/webland/api/CitySearch?area=" + preCode,
        function(data) {
            for (var i = 0; i < data.data.length; i++) {
                $("#shikuchoson").append(
                    "<option value=" + data.data[i].name + ">" + data.data[i].name + "</option>"
                )
            }
        }
    );
}