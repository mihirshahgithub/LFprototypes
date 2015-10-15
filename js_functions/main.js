function myMessage(){
    console.log("In the jungle, the mighty jungle");
}

function add(num1,num2){
    console.log(num1+num2);
}

function add2(num1,num2){
    var total=num1+num2;
    return total;
}

var add2result=add2(5,5);
console.log(add2result);

//Feature Set 3.1 Card-Flip
function cardFlip(back){
    $(back).hide();
    src = getSrc(back);
    console.log(src);

}

//Feature Set 4:
function getSrc(back){
    var front = $(back).prev();
    var img = front.find("img");
    var src = img.attr("src");
    return src;
}

