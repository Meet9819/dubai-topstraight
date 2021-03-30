/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    jebeet.resetFooter()
});

jebeet = new Object();
jebeet.resetFooter = function() {}

jebeet.initProductPage = function() {
   
    var $mnsproduct = $(".leftprod div").not(".leftprod .title,.leftprod .bot");
    $mnsproduct.click(function() {
        var $curProduct = $(this);

        if ($curProduct.closest(".spcate").length > 0) {
            return;
        }
        $mnsproduct.removeClass("sel");
        $curProduct.addClass("sel");
        $("#productlist").css("display", "block");
        $(".rgproview>div>div").css("display", "none");

        var $subCate = $curProduct.next(".spcate");
        $(".leftprod .spcate").not($subCate).slideUp(300);
        $(".leftprod .spcate p").removeClass("sel");
        if ($subCate.length != 0 && !$subCate.is(":visible")) {
            $subCate.slideDown(300);
        }
        $("p:first", $subCate).addClass("sel");

        var title = $curProduct.attr("title");
        var titles = title.split(",");
        for (var i = 0; i < titles.length; i++) {
            var $pro_block = $(".rgproview div[title='" + titles[i] + "']");
            $pro_block.css("display", "block");
            setImgSrc($pro_block);
        }

        jebeet.resetFooter();
    });

    $(".leftprod .spcate p").click(function() {
        var $subCate = $(this);
        var title = $subCate.attr("title");
        $("#productlist").css("display", "block");
        $(".rgproview>div>div").css("display", "none");

        var $pro_block = $(".rgproview div[title='" + title + "']");
        $pro_block.css("display", "block");
        setImgSrc($pro_block);

        $subCate.siblings().removeClass("sel");
        $subCate.addClass("sel");
        jebeet.resetFooter();
    });

    var setImgSrc = function($curBlock) {
        $("img[title]", $curBlock).each(function() {
            var $this = $(this);
            $this.attr("src", $this.attr("title"));
            $this.removeAttr("title");
        });
    }

    
}







