@extends('backend.layouts.app')

@section('admin_js')
    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
@endsection

@section('admin_content')

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin/">{{ app_name() }}</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/admin#/articles/list/">Articles</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/admin/account/">Account</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style type="text/css">
        .mt-30 {
            margin-top:30px !important
        }
    </style>

    <div id="app">

        <div class="container" style="margin-top: 100px;">

            <div class="row">

                <div class="col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">{{ trans('navs.frontend.user.account') }}</div>

                        <div class="panel-body">

                            <div role="tabpanel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.profile') }}</a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">{{ trans('labels.frontend.user.profile.update_information') }}</a>
                                    </li>

                                    @if ($logged_in_user->canChangePassword())
                                        <li role="presentation">
                                            <a href="#password" aria-controls="password" role="tab" data-toggle="tab">{{ trans('navs.frontend.user.change_password') }}</a>
                                        </li>
                                    @endif
                                </ul>

                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane mt-30 active" id="profile">
                                        @include('backend.user.account.tabs.profile')
                                    </div><!--tab panel profile-->

                                    <div role="tabpanel" class="tab-pane mt-30" id="edit">
                                        @include('backend.user.account.tabs.edit')
                                    </div><!--tab panel profile-->

                                    @if ($logged_in_user->canChangePassword())
                                        <div role="tabpanel" class="tab-pane mt-30" id="password">
                                            @include('backend.user.account.tabs.change-password')
                                        </div><!--tab panel change password-->
                                    @endif

                                </div><!--tab content-->

                            </div><!--tab panel-->

                        </div><!--panel body-->

                    </div><!-- panel -->

                </div><!-- col-xs-12 -->

            </div><!-- row -->

        </div><!-- div.container -->

    </div><!-- div.app -->

@endsection