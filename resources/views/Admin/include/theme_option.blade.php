<div class="themes">
    <div class="scrollbar-inner">
        <a href="" class="themes__item" id="1" data-sa-value="1"><img src="{{asset('aegis_files/myasset/img/bg/1.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="2"  data-sa-value="2"><img src="{{asset('aegis_files/myasset/img/bg/2.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="3" data-sa-value="3"><img src="{{asset('aegis_files/myasset/img/bg/3.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="4" data-sa-value="4"><img src="{{asset('aegis_files/myasset/img/bg/4.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="5" data-sa-value="5"><img src="{{asset('aegis_files/myasset/img/bg/5.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="6" data-sa-value="6"><img src="{{asset('aegis_files/myasset/img/bg/6.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="7" data-sa-value="7"><img src="{{asset('aegis_files/myasset/img/bg/7.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="8" data-sa-value="8"><img src="{{asset('aegis_files/myasset/img/bg/8.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="9" data-sa-value="9"><img src="{{asset('aegis_files/myasset/img/bg/9.jpg')}}" alt=""></a>
        <a href="" class="themes__item" id="10" data-sa-value="10"><img src="{{asset('aegis_files/myasset/img/bg/10.jpg')}}" alt=""></a>
    </div>
</div>
<script>
  $(document).ready(function(){
                    $(".themes__item").click(function(){
                        var theme_id = $(this).attr('id');
                         $.get('/management/themeoption/'+ theme_id, function (data) {
                        });
                    });
                });
</script>