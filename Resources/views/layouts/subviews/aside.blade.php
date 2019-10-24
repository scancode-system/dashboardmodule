<aside class="aside-menu">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                <i class="fa fa-upload"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                <i class="fa fa-file-excel-o"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                <i class="fa fa-database"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#layouts" role="tab">
                <i class="fa fa-sitemap"></i>
            </a>
        </li>
    </ul>
    <!-- Tab panes-->
    <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Importações</div>

                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-primary list-group-item-divider list-group-item-action">Clientes</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-info list-group-item-divider list-group-item-action">Produtos</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-danger list-group-item-divider list-group-item-action">Pagamentos</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-warning list-group-item-divider list-group-item-action">Representantes</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-success list-group-item-divider list-group-item-action">Transportadora</a>
            </div>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel">
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Pedidos</div>

                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Simples</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Detalhado</a>
                
            </div>
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Items</div>

                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Simples</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Detalhado</a>
                
            </div>
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Produtos</div>

                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Simples</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Detalhado</a>
                
            </div>
            <div class="list-group list-group-accent">
                <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Representantes</div>

                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Simples</a>
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">Detalhado</a>
                
            </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Backup</h6>
            <div class="aside-options">
                <div class="clearfix mt-4">
                    <small>
                        <b>Remoto</b>
                    </small>
                    <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                        <input class="switch-input" type="checkbox" >
                        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">È necessário conexão com a internet para o backup remoto.</small>
                </div>
                <button class="btn btn-primary mt-2 w-100">Backup</button>
            </div>
            <div class="aside-options">
                <div class="clearfix mt-4">
                    <h6>Automático</h6>
                    {{ Form::select('backup_auto', ['0' => 'Desabilitado', '10' => '10 em 10 minutos', '30' => '30 em 30 minutos', '60' => 'de hora em hora', '180' => '3 em 3 horas'], null, ['class' => 'form-control']) }}
                </div>
            </div>
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