<div class="card bg-danger">
    <div class="card-header">
        <h5 class="text-white"><span class="px-2 fa fa-shopping-cart"></span>Cart</h5>
    </div>
    <div class="card-body px-1">
        <ul class="list-group list">
            <li class="list-group-item ifemptytable d-none">
                <span class="fa fa-warning px-2"></span>
                <b>Aucune information pour l'instant !</b>
            </li>
        </ul>
    </div>
</div>
<script>
    (() => {
        const endpoint = "https://m-auto.herokuapp.com";
        if(localStorage.getItem("current-client")){
            let mycart = window.localStorage.getItem("mycart");
            if(mycart){
                mycart = JSON.parse(mycart);
                if(mycart.length > 0){
                    mycart.forEach(element => {
                        const li = document.createElement("li");
                        $(li).attr({
                            id: new Date().getMilliseconds() * 12,
                            class: "list-group-item"
                        }).html(
                            `
                                <div class="row">
                                    <div class="col-lg-3 col-3 bg-light- pl-0">
                                        <img src=${endpoint}/api/ressources/${element['imgcover']} width="100" />
                                    </div>
              
                                    <div class="col-lg-3 col-9 bg-info- text-right pr-0">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm">
                                                <span >Ajouter </span>
                                            </button>
                                            <button class="btn btn-danger btn-sm">
                                                <span >Enlever </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            `
                        )
                        $(".list").append(li)
                    });
                }else{
                $(".ifemptytable").removeClass("d-none");
                }
            }else{
                $(".ifemptytable").removeClass("d-none");
            }
        }else window.location.replace("?page=login&cb=cart")
    })()
</script>