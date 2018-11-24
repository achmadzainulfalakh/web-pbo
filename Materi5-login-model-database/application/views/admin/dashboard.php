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
      </div>
    </div>
    <div class="col-10">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          tempat yg sudah di submit
        </div>
      </div>
    </div>
  </div>
</div>