<div class="w-full grid h-full ">
    <div class="h-screen w-full portada_back_color place-items-center flex_">
        @include('sections.portada')
    </div>



    <div id="my_proyects" name="my_proyects" style="height:100%;" class="w-dvh  border-b-2 boder-[#67788a] flex bg-[#091a28]">
        @include('sections.my_projects')

    </div>

{{--     <div class="h-[1/4] flex items-center justify-center mb-[15rem] bg-fixed bg-center bg-cover custom-img">

    </div> --}}
    <div class="h-full w-dvh flex mb-[100px]">
        @include('sections.tecnics')
    </div>
    <input type="text" value="wuish_92@hotmail.com" id="myInput" name="myInput" class="hidden">
</div>

<script>
    $(document).ready(function() {
        document.getElementById('downloadBtn').addEventListener('click', function() {
    const link = document.createElement('a');
    link.download = 'filename.ext'; // Specify the file name and extension
    link.click();
});
});



function funciton_copy(){
    var copyText = document.getElementById("myInput");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
    alert('wuish_92@hotmail.com Copied!');
}


function mostrar_modal(id){
    $("#"+id).removeClass("hidden");
}

function ocultar_modal(id){
    $("#"+id).addClass("hidden");
}



</script>
