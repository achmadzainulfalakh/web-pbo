<ul class="nav navbar-dark bg-primary-dark nav-tabs justify-content-between">
  <a class="navbar-brand m-2" href="#">
    <img src="<?= LOCAL; ?>/CDN/img/logo.svg" width="30" height="30" class="d-inline-block" alt="logo">&nbsp;CoolsMaps
  </a>
  <li class="nav-item dropdown dropleft">
    <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
      <i class="material-icons">keyboard_arrow_down</i>&nbsp;actions
    </a>
    <div class="dropdown-menu bg-primary-dark">
      <a class="dropdown-item" href="#">
        <i class="material-icons">home</i>&nbsp;home</a>
      <a class="dropdown-item" href="#">
        <i class="material-icons">dashboard</i>&nbsp;dashboard</a>
      <a class="dropdown-item" href="#">
        <i class="material-icons">account_circle</i>&nbsp;profile</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">
        <i class="material-icons">exit_to_app</i>&nbsp;logout
      </a>
    </div>
  </li>
</ul>
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="material-icons">dashboard</i>&nbsp;Dashboard</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="material-icons">account_box</i>&nbsp;Profile</a>
        <a class="nav-link" id="v-pills-ti-tab" data-toggle="pill" href="#v-pills-ti" role="tab" aria-controls="v-pills-ti" aria-selected="false"><i class="material-icons">star</i> Tempat Ibadah</a>
        <a class="nav-link" id="v-pills-indekos-tab" data-toggle="pill" href="#v-pills-indekos" role="tab" aria-controls="v-pills-indekos" aria-selected="false"><i class="material-icons">hotel</i>&nbsp;Indekos</a>
        <a class="nav-link" id="v-pills-warnet-tab" data-toggle="pill" href="#v-pills-warnet" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="material-icons">computer</i>&nbsp;Warnet</a>
        <a class="nav-link" id="v-pills-warung-tab" data-toggle="pill" href="#v-pills-warung" role="tab" aria-controls="v-pills-warung" aria-selected="false"><i class="material-icons">fastfood</i>&nbsp;Warung</a>
        <a class="nav-link" id="v-pills-pesantren-tab" data-toggle="pill" href="#v-pills-pesantren" role="tab" aria-controls="v-pills-pesantren" aria-selected="false"><img src="<?= LOCAL; ?>/CDN/img/santren.svg" class="special-icon special-dash">&nbsp;Pesantren</a>
      </div>
    </div>
    <div class="col-10">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          tempat yg sudah di submit
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          foto profile
          nama lengkap
          no telp
          email
          perbaharui password
        </div>
        <div class="tab-pane fade" id="v-pills-ti" role="tabpanel" aria-labelledby="v-pills-ti-tab">
          form input tempat ibadah
            > coordinate
            > name
            > address
        </div>
        <div class="tab-pane fade" id="v-pills-indekos" role="tabpanel" aria-labelledby="v-pills-indekos-tab">
          form iput kos
            > coordinate
            > picture
            > rates
            > rooms_facility
            > total_rooms
            > type
            > address
            > description
        </div>
        <div class="tab-pane fade" id="v-pills-warnet" role="tabpanel" aria-labelledby="v-pills-warnet-tab">
          form input warnet
            > coordinate
            > name
            > facility
            > address
        </div>
        <div class="tab-pane fade" id="v-pills-warung" role="tabpanel" aria-labelledby="v-pills-warung-tab">
          fom input warung
            > coordinate
            > name
            > picture
            > address
        </div>
        <div class="tab-pane fade" id="v-pills-pesantren" role="tabpanel" aria-labelledby="v-pills-pesantren-tab">
          form input pesantren
            > coordinate
            > name
            > picture
            > phone_number
            > facility
            > description
            > daily_activities
        </div>
      </div>
    </div>
  </div>
</div>