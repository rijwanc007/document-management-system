$('.all-checked').click(function(){
                if (this.checked) {

                    $('.styled-checkbox').each(function(){
                        this.checked = true;
                    })
                }else{
                    $('.styled-checkbox').each(function(){
                        this.checked = false;
                    })
                }
            })

            $('.mark-as-star').click(function(){
                if($(this).hasClass('checked')){
                $('.styled-checkbox').each(function(){
                    if(this.checked){
                        $('.mark-as-star').removeClass('checked'),
                        $(this).parent().parent().find('.star').each(function(){
                            this.checked = false;
                        })
                    }
                })
                }
                else{
                    
                    $('.styled-checkbox').each(function(){
                    if(this.checked){
                        $('.mark-as-star').addClass('checked'),
                        $(this).parent().parent().find('.star').each(function(){
                            this.checked = true;
                        })
                    }
                })
                }
            })
            $(".mail .styled-checkbox").on("click", function(){
               if($(this).is(":not(:checked)")){
                  $('#styled-checkbox-0').prop( "checked", false );
               }
            });

            $(".mail .star").on("click", function(){
               if($(this).is(":not(:checked)")){
                  $('.mark-as-star').removeClass('checked');
               }
            });

            $('.all-unstared').click(function(){
                $('.styled-checkbox').each(function(){
                    if(this.checked){
                        $('.mark-as-star').removeClass('checked'),
                        $(this).parent().parent().find('.star').each(function(){
                            this.checked = false;
                        })
                    }
                })
        })

            $('.all-stared').click(function(){
                $('.styled-checkbox').each(function(){
                    if(this.checked){
                        $('.mark-as-star').addClass('checked'),
                        $(this).parent().parent().find('.star').each(function(){
                            this.checked = true;
                        })
                    }
                })
        })
                    $('.after-check').hide();

             $('.styled-checkbox').click(function(){
                if ($('.styled-checkbox').is(':checked')) {
                    $('.after-check').fadeIn();
                }
                else{
                    $('.after-check').hide();
                }
            })

    function cc(obg){
    $('.cc-text').toggle();
  }

  function bcc(obh){
    $('.bcc-text').toggle();
  }

  if($(window).width() <=767){
    $('.styled-checkbox').click(function(){
                if ($('.styled-checkbox').is(':checked')) {
                    $('.actions.pagination').hide();
                }
                else{
                    $('.actions.pagination').fadeIn();
                }
            })
  }

  else if($(window).width() ==768){
    $('.styled-checkbox').click(function(){
                if ($('.styled-checkbox').is(':checked')) {
                    $('.actions.pagination').hide();
                    $('.search.mail-search').hide();
                }
                else{
                    $('.actions.pagination').fadeIn();
                    $('.search.mail-search').fadeIn();
                }
            })
  }