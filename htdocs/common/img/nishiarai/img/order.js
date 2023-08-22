/**通常ORDER用**/
/*----------------------
タイトルコード（タイトルに合わせて変更）
----------------------*/
var code = 'FRD';

/*----------------------
購入用コード（subscription_issueとsubscriptionの値）
----------------------*/
var subscCodes = {
  "teikiKumitate1": "70870329", //【定期】
  "teikiKumitate1UPS": "70870329UPS", //【定期】【アップセル】
  "teikiKumitate1Cam": "870319", //【定期】【キャンペーン】
  "teikiKumitate1UC": "870319UPS", //【定期】【アップセル】【キャンペーン】

  "teikiKumitate1_i": "70870329MUK", //【定期】【一括】
  "teikiKumitate1UPS_i": "70870329MUKUPS", //【定期】【アップセル】【一括】
  "teikiKumitate1Cam_i": "870319MUK", //【定期】【キャンペーン】【一括】
  "teikiKumitate1UC_i": "870319MUKUPS", //【定期】【アップセル】【キャンペーン】【一括】

  "UPS": "7087020AUPS", //定期は無しで【アップセル】のみ
}



/*--------------------------
    コード(バインダーなど)
--------------------------*/
var addCodes = {
  "binder1": "1008702151000000",//バインダー
  //"backnumber1": "その他の商品コード"
}

/*-----------------
    ボタン用関数
-----------------*/
function btnOff() {
  $('#order_btnBox').addClass("off");
  $('#order_url').attr('href', 'javascript:void(0)');
}

function btnOn(url) {
  $('#order_btnBox').removeClass("off");
  $('#order_url').attr('href', url);
}


/*----------------
    全体の関数
----------------*/
function fun_order() {
  var teikiCheck = $('#teikiCheck').prop('checked'); //定期購読
  var DegitalCheck = $('#Degital').prop('checked'); //定期購読
  var id_teikiStart = $('#id_teikiStart').val(); //定期購読開始号
  var upsCheck = $('#upsCheck').prop('checked'); //アップセル
  var campaignCheck = $('#campaignCode').val(); //キャンペーンコード
  var binderCheck = $('#binderCheck').prop('checked'); //バインダー
  var id_binderNum = $('#id_binderNum').val(); //バインダー数量
  var id_backnumberNum = $('#id_backnumberNum').val(); //その他の商品
  var ikkatsuCheck = $('#ikkatsuOn').prop('checked'); //一括前払い
  //console.log("---------------------------------");
  //console.log("teikiCheck: " + teikiCheck);
  //console.log("teikiCheck2: " + teikiCheck2);
  //console.log("binderCheck: " + binderCheck);
  //console.log("binderCheck2: " + binderCheck2);
  //console.log("id_binderNum: " + id_binderNum);
  //console.log("id_binderNum2: " + id_binderNum2);


  /*----- 定期購読 -----*/
  var url= 'https://deagostini.jp/order/index.php?mod=bulk&';
  var teikiCode;
  var camp2Code = $('#campaignCode').val().slice(0, 2); //キャンペーンコードの最初の二桁
  
  //定期にチェックが付いたら開始号を選択出来るように
  if(teikiCheck) { 
    $('#id_teikiStart').prop('disabled', false);
  } else {
    $('#id_teikiStart').prop('disabled', true);
    $('#id_teikiStart').val(0);
  }
  //定期購読の選択が開始号からの時step2を解除
  if(teikiCheck) {
    $(".sectionWrap").hide();
    console.log("aa")
    
  } else {
    $(".sectionWrap").show();
    $('#teikiCheck').prop('checked',false);
    $('#Degital').prop('checked',false);
    $('#shimen').prop('checked',true);
  }

  //【定期】【組み立て1】
  if(teikiCheck) {
    teikiCode = subscCodes.teikiKumitate1;
  }
  //【定期】【組み立て1】【アップセル】
  if(teikiCheck && upsCheck) {
    teikiCode = subscCodes.teikiKumitate1UPS;
  }
  //【定期】【組み立て1】【キャンペーン】
  if(teikiCheck && campaignCheck) {
    teikiCode = camp2Code + subscCodes.teikiKumitate1Cam;
  }
  //【定期】【組み立て1】【アップセル】【キャンペーン】
  if(teikiCheck && upsCheck && campaignCheck) {
    teikiCode = camp2Code + subscCodes.teikiKumitate1UC;
  }

  
  //【一括】【定期】【組み立て1】
  if(teikiCheck && ikkatsuCheck) {
    teikiCode = subscCodes.teikiKumitate1_i;
  }
  //【一括】【定期】【組み立て1】【アップセル】
  if(teikiCheck && upsCheck && ikkatsuCheck) {
    teikiCode = subscCodes.teikiKumitate1UPS_i;
  }
  //【一括】【定期】【組み立て1】【キャンペーン】
  if(teikiCheck && campaignCheck && ikkatsuCheck) {
    teikiCode = camp2Code + subscCodes.teikiKumitate1Cam_i;
  }
  //【一括】【定期】【組み立て1】【アップセル】【キャンペーン】
  if(teikiCheck && upsCheck && campaignCheck && ikkatsuCheck) {
    teikiCode = camp2Code + subscCodes.teikiKumitate1UC_i;
  }
  //定期は無しで【アップセル】のみ
  if(!teikiCheck && upsCheck) {
    teikiCode = subscCodes.UPS;
    id_teikiStart = 1;
  }
  url = 'https://deagostini.jp/order/index.php?mod=bulk&subscription_issue[' + teikiCode + ']=' + id_teikiStart + '&subscription[' + teikiCode + ']=1';

  //定期もアップセルも無し
  if(!teikiCheck && !upsCheck) {
    url = 'https://deagostini.jp/order/index.php?mod=bulk';
  }

  
/* 確認用 
if(url.match("823219UPS")){console.log("【定期】【組立なし】【アップセル】【キャンペーン】");
}else if(url.match("82321AABSUPS")){console.log("【定期】【組立毎月】【アップセル】【キャンペーン】");
}else if(url.match("82321AABS")){console.log("【定期】【組立毎月】【キャンペーン】");
}else if(url.match("82321BABSUPS")){console.log("【定期】【組立一括】【アップセル】【キャンペーン】");
}else if(url.match("82321BABS")){console.log("【定期】【組立一括】【キャンペーン】");
}else if(url.match("823219")){console.log("【定期】【組立なし】【キャンペーン】");

}else if(url.match("70823229UPS")){console.log("【定期】【組立なし】【アップセル】");
}else if(url.match("70823229")){console.log("【定期】【組立なし】");
}else if(url.match("7082322AABSUPS")){console.log("【定期】【組立毎月】【アップセル】");
}else if(url.match("7082322AABS")){console.log("【定期】【組立毎月】");
}else if(url.match("7082322BABSUPS")){console.log("【定期】【組立一括】【アップセル】");
}else if(url.match("7082322BABS")){console.log("【定期】【組立一括】");
}else if(url.match("7082320AUPS")){console.log("定期は無しで【アップセル】のみ");
}else{console.log("該当無し");
}
*/


  /*----- バインダー -----*/
  //バインダーにチェックが無い場合はセレクトを使用不可に
  if(binderCheck) {
    $('#id_binderNum').prop('disabled', false);
  } else {
    $('#id_binderNum').prop('disabled', true);
    $('#id_binderNum').val(0);
  }
  //バインダーの数
  if(id_binderNum > 0) {
    url = url + '&binder[' + addCodes.binder1 + ']=' + id_binderNum;
  }
  

  /*----- その他の商品 -----*/
  //その他の商品の数
  if(id_backnumberNum > 0) {
    url = url + '&backnumber[' + addCodes.backnumber1 + ']=' + id_backnumberNum;
  }
  /*----- /その他の商品 -----*/


  // デジタル有り
  if (DegitalCheck == true) {
    url = url + '&subscription_unit_type=72';
  } //デジタル有り

  /*----- ボタンのonOff -----*/
  if(teikiCheck == true || binderCheck == true || upsCheck == true) {
    btnOn(url);
  } else {
    btnOff();
  }
  /*----- /ボタンのonOff -----*/



  console.log(url)
}//fun_order FncEnd


/*----------------
    ループ処理
----------------*/
$(document).ready(function () {
  (function order_l() {
    setTimeout(order_l, 500);
    fun_order();
  })();

  //キャンペーンコードが違う場合はアラートを出す
  $("#order_url").click(function () {
    var campaignCode = $("#campaignCode").val().slice(0, 2);
    if(!campaignCode) {
      //キャンペーンコードなし
    } else if(campaignCode == 40 || campaignCode == 41 || campaignCode == 61 || campaignCode == 62 || campaignCode == 64 || campaignCode == 66 || campaignCode == 67) {
      console.log("キャンーペーンコード" + campaignCode)
    } else {
      alert("キャンペーンコードに誤りがあります")
      return false
    }
  });

});


//最新発売号の数字

var id_teikiStartBuy;
var id_teikiStartBuyNext;
var id_teikiStartBuyPrev;
$(document).ready(function () {
  var obj = new XMLHttpRequest();
  obj.open('GET', '/api/getSubscriptionStartIssue.php?title_code=' + code, true);
  obj.send(null);
  obj.onreadystatechange = function () {
    if(obj.readyState == 4) {
      var selectHtml = obj.responseText;
      if(location.host == "deagostini.jp"){
        $("#id_teikiStart").html(selectHtml);
      }else{
        $("#id_teikiStart").html('<option value="1" >★創刊号から</option><option value="2" >第2号から</option>');
      }
      teikiStart = $('#last_issue').val();
      id_teikiStartBuy = parseInt(teikiStart);
      id_teikiStartBuyNext = id_teikiStartBuy + 1;
      id_teikiStartBuyPrev = id_teikiStartBuy - 1;
    }
  }
});
