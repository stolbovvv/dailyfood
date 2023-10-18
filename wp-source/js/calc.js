function calcIt() 
{

    var weight = parseInt($('#weight-slider').find('#handle-val').text());
    var age = parseInt($('#age-slider').find('#handle-val').text());
    var height = parseInt($('#height-slider').find('#handle-val').text());
    var res = 0;
    var activity = $('#activity option:selected').val();
    var text = 'Ваша норма калорий в день: <span>';
    var normtarif = 0;
    if ($('#gender option:selected').val() == 'M') {
       var sex = 'male';
       res = (10 * weight + 6.25 * height - 5 * age + 5) * activity; 
       res = Math.round(res);       
       text = text + res;
       $('#ress').html(text + '</span>');
    } else {
	   var sex = 'female';
       res = (10 * weight + 6.25 * height - 5 * age - 161) * activity; 
       res = Math.round(res);
       text = text + res;
       $('#ress').html(text + '</span>');
    }   
    var tarifs = {
      "Офис" : 900,
      "Стройность" : 1100,
      "Баланс" : 1300,
      "Фитнес-ПРО" : 1600,
      "Сила" : 2400,
    }
    var links = {
      "Офис" : "office",
      "Стройность" : "slenderness",
      "Баланс" : "balance",
      "Фитнес-ПРО" : "fitnes-pro",
      "Сила" : "strength",
    }
    var min = 99999;
    for (var tarif in tarifs) {
        var dif = res - tarifs[tarif];
        dif = Math.abs(dif);
        if (dif < min) {
            min = dif;
            normtarif = tarif;
            var norma = tarifs[tarif];
        }   
    }
    var pohud = [];
    var nabor = [];
    for (tarif in tarifs) {
        if (tarif != normtarif) {
            if (tarifs[tarif] < tarifs[normtarif]) {
                pohud.push(tarif);
            } else {
                nabor.push(tarif);
            }
        }
    }
    var block_start = `<div class="col-3 m-auto">
                        <div class="calc-tarif-img"><img src="/wp-content/uploads/2019/11/0WjRDnvkSA4.jpg" alt="menu"></div>
                        <div class="calc-tarif-info">
                        <span class="green-header">`;
    var perekus = `<div class="col-1 m-auto perekus-plus">+</div><div class="col-3 m-auto perekus"><div class="calc-tarif-img"><img src="/wp-content/uploads/2018/06/questions-form-bg.jpg" alt="menu"></div><div class="calc-tarif-info"><span class="green-header">Перекусы</span></div></div>`;


    if ($('#target option:selected').val() == 'pohud') {
        if (pohud.length > 1) {  
            var block = '';
            for (tarif in pohud) {
                block = block + block_start + pohud[tarif] + '</span><span class="calc-header">'+  tarifs[pohud[tarif]] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[pohud[tarif]] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>';
            }
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдут тарифы:');
        } else if (pohud.length == 1) {
            var block = '';
            block = block_start + pohud[0] + '</span><span class="calc-header">'+  tarifs[pohud[0]] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[pohud[0]] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>';
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдет тариф:');
        } else {
            $('.calc-tarif-wrapper').html('');
            $('#tarif').html('К сожалению у нас нет подходящего Вам тарифа для похудения ');
        }

    } else if ($('#target option:selected').val() == 'norma') {
        if  (min > 400) {
            var block = '';
            block = block_start + normtarif + '</span><span class="calc-header">'+  tarifs[normtarif] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[normtarif] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>' + perekus;
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдет тариф:');
        } else{
            var block = '';
            block = block_start + normtarif + '</span><span class="calc-header">'+  tarifs[normtarif] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[normtarif] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>';
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдет тариф:');
        }      
    } else if ($('#target option:selected').val() == 'nabor') {
        if (nabor.length > 1) {
            var block = '';
            for (tarif in nabor) {
               block = block + block_start + nabor[tarif] + '</span><span class="calc-header">'+  tarifs[nabor[tarif]] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[nabor[tarif]] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>';
            }
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдут тарифы:');
        } else if (nabor.length == 1) {
            var block = '';
            block = block_start + nabor[0] + '</span><span class="calc-header">'+  tarifs[nabor[0]] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[nabor[0]] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>';
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдет тариф:');
        } else {
            var block = '';
            block = block_start + normtarif + '</span><span class="calc-header">'+  tarifs[normtarif] + ' ккал</span>' + '<a href="" onclick="$(\'.' + links[normtarif] + '\').click(); return false" class="calc-tarif-more">Подробнее</a></div></div>' + perekus;
            $('.calc-tarif-wrapper').html(block);
            $('#tarif').html('Вам подойдет тариф:');
        }
    }
    return true;
}