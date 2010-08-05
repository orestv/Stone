function clicked(sender){
    var el = sender;
    var x = 0, y = 0;
    while (el != null){
        y += el.offsetTop;
        x += el.offsetLeft;
        el = el.offsetParent;
    }
    sender.style.left = 0;
}
