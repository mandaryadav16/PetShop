<div class="text-center btl bbl bg-white" style="width: 50px;height: 40px;">
    <i class="fa fa-search cl" aria-hidden="true" style="line-height: 40px"></i>
</div>
<div style="width: calc(100% - 150px);height: 40px;background: red">
    <input id="inputSearch" placeholder="Search Dog" style="width: 100%;height: 100%;border:0;outline: none;">
</div>
<div class="p-1 btr bbr bg-white" style="width: 100px;height: 40px;">
    <div class="btn bg" style="width: 100%;height: 100%">
        <p class="font-weight-bold text-white" style="margin-top: -4px">Search</p>
    </div>
</div>

<div id="searchResult" class="bg-white p-2" style="width: 100%;position: absolute;margin-top: 40px;border-radius: 8px;display: none;">

</div>

<script type="text/javascript">
    $('#inputSearch').on('keyup',function(){
        $inputSearch = $(this).val();
        if($inputSearch == ''){
          $('#searchResult').html('');
          $("#searchResult").hide();
      }else{
        $.ajax({
            method: "get",
            url: './ApiController/Search/'+$inputSearch+'',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
          },
          success: function (data) {
            var searchResultAjax = ''; 
            data = JSON.parse(data);
            // console.log(data);

            if(data.length==0){
                $("#searchResult").hide();
            } else{
               $("#searchResult").show();
           }
           for(let i = 0; i < data.length; i++) {
            var prinfImage;
            var imageLink = data[i].image;
            var imageLinkcut = imageLink.split(",",1);

            var typePrinf;
            if(data[i].type == 1){
                typePrinf = "Little Pug";
            }else if(data[i].type == 2){
                typePrinf = "Big Pug";
            }
            searchResultAjax+=`<a href="./detail/page/`+data[i].id+`" style="text-decoration:none;color:black"><div class="mt-2" style="width: 100%;height: 70px;display: flex;">
            <div style="width: 70px;height: 70px;">
            <img src="./public/images/product/`+imageLinkcut+`" width="100%" height="100%" style="object-fit: contain">
            </div>
            <div class="pl-2" style="width: calc(100% - 70px);height: 70px;">
            <p class="font-weight-bold mb-0" style="overflow: hidden;max-height: 25px">`+data[i].title+` - `+typePrinf+`</p>
            <div class="float-left" style="width: 50%">
            <p class="mb-0 cl" style="font-size: 75%;overflow: hidden;max-height: 17px">Name: `+data[i].name+`</p>
            <p  class="mb-0 cl" style="font-size: 75%;overflow: hidden;max-height: 17px">Origin: `+data[i].origin+`</p>
            </div>
            <div class="float-left" style="width: 50%">
            <p class="mb-0 cl" style="font-size: 75%;overflow: hidden;max-height: 17px">Age: `+data[i].age+`</p>
            <p  class="mb-0 cl" style="font-size: 75%;overflow: hidden;max-height: 17px">Weight: `+data[i].weight+`kg</p>
            </div>
            <div style="clear: both;"></div>
            </div>
            </div></a>`; 
        } 
        $('#searchResult').html(searchResultAjax);
    }
});
    }   
})
</script>