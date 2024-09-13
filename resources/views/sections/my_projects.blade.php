
<style>
    #modalOverlay {
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background-color: rgba(0,0,0,0.8);
  z-index:9999;
}

#modal {
  position:fixed;
  width:60%;
  top:55%;
  left:50%;
  padding:15px;
  text-align:center;
  background-color:#fafafa;
  box-sizing:border-box;
  opacity:0;
  transform: translate(-50%,-50%);
  transition:all 150ms ease-in-out;
}

#modalOverlay.modal-open #modal {
  opacity:1;
  top:50%;
}


</style>
{{-- <div class="h-[1/4] flex items-center justify-center mb-12 bg-fixed bg-center bg-cover custom-img">

</div> --}}
<div class="grid w-full h-[100%] bg-fixed bg-center bg-cover custom-img">
    <div class="grid w-full justify-items-center place-content-center my-3">
        <h1 class="text-5xl text-[#ec1c24] font-roboto font-bold text-border">{{__('index.my_proyects')}}</h1>
    </div>
    <div class="grid justify-items-center gap-y-5 gap-x-3 w-full mx-3  mb-4">
        @include('sections.modal_petc')

        <div id="open" {{-- onmouseover="show_info('info_porta_petc','info_summary')" onmouseout="hide_info('info_porta_petc','info_summary');" --}}  class="bg-[#172c3d] w-[60%] rounded overflow-hidden  border-[3px] border-[#67788a] cursor-pointer hover:border-[#ec1c24]">
            <div id="info_porta_petc" name="info_porta_petc" class="w-full">
                <section class=""> <!-- inicio efecto parallax  -->
                    <div class="covera parallaxas_petc">
                        <p class="title_porject font-roboto">
                        Programa de Escuelas de Tiempo Completo (PETC)
                        <span class="title_porject font-roboto">{{__('index.pect_port_summary')}}</span>
                        </p>

                    </div>
                </section>
            </div>

            <div id="info_summary" name="info_summary" class="w-full hidden">
               {{--  @include('body_carts_projects.portada_petc')
                @include('body_carts_projects.sumary_petc') --}}
            </div>

            <div class="w-full bg-[#091a28] flex justify-end">
                <div class="px-6 pt-4 pb-2 flex gap-4 w-2/4 md:w-full justify-center">
                    <div>
                        <img class="w-10 h-10" title="Laravel" src="{{asset('images/laravel.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="HTML" src="{{asset('images/html.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="CSS" src="{{asset('images/css.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="MySQL" src="{{asset('images/mysql.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="JavaScript" src="{{asset('images/JS.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Ajax" src="{{asset('images/ajax.png')}}">
                    </div>

                    <div>
                        <img class="w-10 h-10" title="Github" src="{{asset('images/gitlogo.png')}}">
                    </div>
                </div>
            </div>
        </div>


{{--         <div class="wrap animate pop">
            <div class="overlay">
                <div class="overlay-content animate slide-left delay-2">
                    <h1 class="animate slide-left pop delay-4">Trees</h1>
                    <p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;">Kingdom: <em>Plantae</em></p>
                </div>
                <div class="image-content animate slide delay-5"></div>
                <div class="dots animate">
                    <div class="dot animate slide-up delay-6"></div>
                    <div class="dot animate slide-up delay-7"></div>
                    <div class="dot animate slide-up delay-8"></div>
                </div>
            </div>
            <div class="text">
                <p><img class="inset" src="https://assets.codepen.io/4787486/oak_1.jpg" alt="" />Trees are woody perennial plants that are a member of the kingdom <em>Plantae</em>. All species of trees are grouped by their genus, family, and order. This helps make identifying and studying trees easier.</p>
                <p>Apart from providing oxygen for the planet and beauty when they bloom or turn color, trees are very useful. Certain species of hardwood and softwood trees are excellent for timber, making furniture, and paper.</p>
                <p>When managed properly, trees are a good source of renewable energy and construction material.</p>
            </div>
        </div> --}}

    </div>

</div>
<script>
$('#open').click(function() {
  $('#modal_petc').show().addClass('modal-open');
});

$('#close').click(function() {
  var elem = $('#modal_petc');
  elem.removeClass('modal-open');
  setTimeout(function() {
    elem.hide();
  },200);
});

function show_info(id_hide,id_show){
    $('#'+id_show).removeClass('hidden');
    $('#'+id_hide).addClass('hidden');
}

function hide_info(id_show,id_hide){
    $('#'+id_show).removeClass('hidden');
    $('#'+id_hide).addClass('hidden');
}

$(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel').carousel('prev');
  });
});
</script>
