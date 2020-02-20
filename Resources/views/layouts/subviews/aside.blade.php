<aside class="aside-menu">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#messages" role="tab">
                <i class="fa fa-file-excel-o"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#timeline" role="tab">
                <i class="fa fa-upload"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#export" role="tab">
                <i class="fa fa-exchange"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <i class="fa fa-database"></i>
            </a>
        </li>
        <!--<li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#layouts" role="tab">
                <i class="fa fa-sitemap"></i>
            </a>
        </li>-->
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="messages" role="tabpanel">
            @loader(['loader_path' => 'aside.report'])
        </div>
        <div class="tab-pane" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Importações</div>
                @loader(['loader_path' => 'aside.import'])
            </div>
        </div>
        <div class="tab-pane" id="export" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">TXT</div>
                @loader(['loader_path' => 'aside.export.txt'])
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Excel</div>
                @loader(['loader_path' => 'aside.export.excel'])
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">API</div>
                @loader(['loader_path' => 'aside.export.api'])
            </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            @include('dashboard::layouts.subviews.aside.backup')
        </div>
        <div class="tab-pane p-3" id="layouts" role="tabpanel">
            <h6>Interface</h6>
            <div class="aside-options">
                <div class="clearfix mt-4">
                    <small>
                        <b>Tema Dark</b>
                    </small>
                    <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                        <input class="switch-input" type="checkbox" >
                        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">Modo com vizualização mais escura.</small>
                </div>
                <div class="clearfix mt-4">
                    <small>
                        <b>Navegação Minimizado</b>
                    </small>
                    <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                        <input class="switch-input" type="checkbox" >
                        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">Este modo é recomendado para utilização em tablets ou celulares.</small>
                </div>
                <div class="clearfix mt-4">
                    <small>
                        <b>Menu Secundario Aberto</b>
                    </small>
                    <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                        <input class="switch-input" type="checkbox" >
                        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">Permite acesso rápido a funcionalidades secundárias</small>
                </div>
                <button class="btn btn-primary mt-2 w-100">Salvar</button>
            </div>
        </div>
    </div>
</aside>