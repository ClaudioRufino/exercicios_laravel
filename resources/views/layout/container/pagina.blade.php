@include('layout.componentes.header')
@include('layout.componentes.dashboard')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
             <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('conteudo')
                </div>
                @include('layout.componentes.footer')
            </div> 
        </div>
    </div>
</div>