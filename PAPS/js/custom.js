(function($) {
    $(function() {
        var $vehImg = $('.single-post .entry-content img');

        $vehImg.each(function(){
            var $this = $(this);

            $this.addClass('show-img')
        });

        $('.show-img').click(function(e){
            e.preventDefault();
            var src = $(this).attr('src'),
                split = src.split('/'),
                imgPath = split[6].split('_'),
                newPath = '/' + split[1] + '/' + split[2] + '/' + split[3] + '/' + split[4] + '/' + imgPath[0] + '_' + imgPath[1] + '.jpg',
                $imgBox = $('.img-box'),
                $opacBg = $('.opac-bg');
            console.log(split);
            console.log(imgPath);
            console.log(newPath);
            $imgBox.find('img').attr('src', newPath);
            $imgBox.show();
            $opacBg.show();
        });

        $('.opac-bg').click(function(){
            $('.img-box').hide();
            $(this).hide();
        })
    })
})(jQuery);