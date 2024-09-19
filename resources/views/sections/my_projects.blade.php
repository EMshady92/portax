
<div class="grid w-full h-screen bg-fixed bg-center bg-cover custom-img">
    <div class="grid w-full justify-items-center place-content-center my-3">
        <h1 class="text-5xl text-[#ec1c24] font-roboto font-bold text-border">{{__('index.my_proyects')}}</h1>
    </div>
    <div class="grid justify-items-center columns_projets gap-y-5 gap-x-3 w-full  mb-4 mx-1">
        @include('sections.modal_hvacopcost')
        @include('sections.modal_sitzac')
        @include('sections.modal_petc')
        @include('sections.modal_inventory')

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

function show_info(id_hide,css_class){
    $('#'+id_hide).toggleClass("coverax");
    $('#'+id_hide).toggleClass(css_class);
}

function hide_info(id_show,id_hide){
    $('#'+id_show).removeClass('hidden');
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
