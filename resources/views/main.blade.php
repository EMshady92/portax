<div class="w-full grid h-full ">
    <div class="h-screen w-full portada_back_color border-b-2 boder-[#67788a] flex_">
        @include('sections.portada')
    </div>



    <div style="height:120vh;" class="w-dvh  border-b-2 boder-[#67788a] flex bg-[#091a28]">
        @include('sections.my_projects')
    </div>

{{--     <div class="h-[1/4] flex items-center justify-center mb-[15rem] bg-fixed bg-center bg-cover custom-img">

    </div> --}}
    <div class="h-full w-dvh flex mb-[100px]">
        @include('sections.tecnics')
    </div>
</div>

<script>

function mostrar_modal(id){
    $("#"+id).removeClass("hidden");
}

function ocultar_modal(id){
    $("#"+id).addClass("hidden");
}



</script>
