// JavaScript Document

$(document).ready(function(){
  //acordion_treeを一旦非表示に
  $(".acordion_tree").css("display","none");
  //triggerをクリックすると以下を実行
  $(".trigger").click(function(){
    //もしもクリックしたtriggerの直後の.acordion_treeが非表示なら
    if($("+.acordion_tree",this).css("display")=="none"){
         //classにactiveを追加
         $(this).addClass("active");
         //直後のacordion_treeをスライドダウン
         $("+.acordion_tree",this).slideDown("normal");
  }else{
    //classからactiveを削除
    $(this).removeClass("active");
    //クリックしたtriggerの直後の.acordion_treeが表示されていればスライドアップ
    $("+.acordion_tree",this).slideUp("normal");
  }
  });
});