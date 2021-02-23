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

    let areas = document.getElementsByClassName('area');

    Array.prototype.forEach.call(areas, element => {
        if (element.dataset.key == selected) {
            element.style.display = "inline";
        } else {
            element.style.display = "none";
        }
    });
}

selectTodofuken();

function selectTodofuken() {
    let preCode = $('#todofuken option:selected').data('perfcode');
    $("#shikuchoson").html('');
    $.getJSON("https://www.land.mlit.go.jp/webland/api/CitySearch?area=" + preCode,
        function(data) {
            // 空の選択肢
            $("#shikuchoson").append("<option value=''></option>");

            for (var i = 0; i < data.data.length; i++) {
                $("#shikuchoson").append(
                    "<option value=" + data.data[i].name + ">" + data.data[i].name + "</option>"
                )
            }
        }
    );
}