$(document).ready(function() {
    priceChsnge();
});
function showAndHideDivs(id1, id2){
    $('#'+id1).show();
    $('#'+id2).hide();
}
function showAndHideThreeDivs(id1, id2, id3){
    $('#'+id1).show();
    $('#'+id2).hide();
    $('#'+id3).hide();
}
function addedInBasket(id){
    var count = $('#countGoods').html();
    count++;
    $('#countGoods').html(count);
    $('#idGood').val(id);
    $.ajax({
	url: "/addedGood",
	type: "POST",
	data: $("#formAddGood").serialize(),
	success: function(data){
            alert(data);
	}
    });
}
function updateData(index, done){
    var elements = document.getElementsByName('dishId[]');
    var elem = elements[index];
    var id = elem.value;
    $('#idGood').val(id);
    $('#do').val(done);
    $.ajax({
	url: "/updateGood",
	type: "POST",
	data: $("#formAddGood").serialize(),
    });
}
function priceChsnge(){
    var prices = document.getElementsByName('costFood[]');
    var elems = document.getElementsByName('food_count[]');
    var totalPrice = document.getElementById('current_price');
    var price = 0;
    for(var i=0; i<prices.length; i++){
        price += (prices[i].value*elems[i].value);
    }
    totalPrice.innerHTML = price;
    $("#totalPrice").val(price);
}
function plus(index){
    updateData(index,"+");
    var elems = document.getElementsByName('food_count[]');
    var spans = document.getElementsByClassName('food-count');
    elems[index].value++;
    spans[index].innerHTML++;
    priceChsnge();
}
function minus(index){
    updateData(index,"-");
    var elems = document.getElementsByName('food_count[]');
    var spans = document.getElementsByClassName('food-count');
    if(elems[index].value > 1){
        elems[index].value--;
        spans[index].innerHTML--;
    }
    priceChsnge();
}
function deleteGood(id){
    window.location.href = '/deleteGood/'+id;
}
