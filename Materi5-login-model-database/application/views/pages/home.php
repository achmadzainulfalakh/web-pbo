<div class="container-fluid">
    <div class="row shadow-sm pb-2">
        <div class="col-md-4 d-none d-md-block text-center">
            <img class="img-fluid d-inline-block" style="margin:auto !important;width:10rem;height:auto;" src="<?= LOCAL; ?>/CDN/img/logo.svg" alt="LOGO">
        </div>
        <div class="col-md-8 pt-5 hrenbg">
            <div class="row">
                <div class="col">
                    <h2 clas="text-muted">Temukan tempat yang anda perlukan dengan cepat !</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col">
                    <form method="post" action="home/search">
                        <div class="row mt-3">
                            <div class="col-12 col-lg-auto">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Povinsi</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option value="1">Tempat Ibadah</option>
                                    <option value="2" selected>Indekos</option>
                                    <option value="3">Warnet</option>
                                    <option value="4">Warung</option>
                                    <option value="5">Pesantren</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Kabupaten</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option value="1">Tempat Ibadah</option>
                                    <option value="2" selected>Indekos</option>
                                    <option value="3">Warnet</option>
                                    <option value="4">Warung</option>
                                    <option value="5">Pesantren</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Kota</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option value="1">Tempat Ibadah</option>
                                    <option value="2" selected>Indekos</option>
                                    <option value="3">Warnet</option>
                                    <option value="4">Warung</option>
                                    <option value="5">Pesantren</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <button type="submit" class="btn btn-lg btn-primary mt-3">
                                    <i class="material-icons">location_searching</i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row shadow-sm">
        <div class="col text-center card-deck justify-content-around">
            <div class="card border-primary my-3 text-primary" style="max-width:15rem;">
                <div class="card-header">{Tempat Ibadah}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><i class="material-icons">star</i></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
            <div class="card border-secondary my-3 text-secondary" style="max-width:15rem;">
                <div class="card-header">{Indekos}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><i class="material-icons">hotel</i></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
            <div class="card border-danger my-3 text-danger" style="max-width:15rem;">
                <div class="card-header">{Warnet}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><i class="material-icons">computer</i></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
            <div class="card border-info my-3 text-info" style="max-width:15rem;">
                <div class="card-header">{Warung}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><i class="material-icons">fastfood</i></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
            <div class="card border-success my-3 text-success" style="max-width:15rem;">
                <div class="card-header">{Pesantren}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><img src="<?= LOCAL; ?>/CDN/img/santren2.svg" class="special-icon special-home"></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
            <div class="card border-warning my-3 text-warning" style="max-width:15rem;">
                <div class="card-header">{Fotocopy}</div>
                <div class="card-body">
                    <p class="card-title" style="font-size:3rem;"><i class="material-icons">print</i></p>
                    <p class="card-text">berhasil ditemukan : 5 hasil</p>
                </div>
            </div>
        </div>
    </div>
</div>
