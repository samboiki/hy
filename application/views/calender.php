<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

        <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
    <div class="logo">
        <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="">
                    <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Forms</span></a>
                    <ul id="forms-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="form_account.html">Account</a></li>
                        <li class=""><a href="form_article.html">Article</a></li>
                        <li class=""><a href="form_elements.html">Elements</a></li>
                        <li class=""><a href="form_validation.html">Validation</a></li>
                        <li class=""><a href="form_wizard.html">Wizard</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
                    <ul id="stats-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="stat_statistics.html">Stats</a></li>
                        <li class=""><a href="stat_charts.html">Charts</a></li>
                        <li class=""><a href="stat_realtime.html">Realtime</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
                    <ul id="ui-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="ui_buttons.html">Buttons</a></li>
                        <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
                        <li class=""><a href="ui_notifications.html">Notifications</a></li>
                        <li class=""><a href="ui_icons.html">Icons</a></li>
                        <li class=""><a href="ui_tabs.html">Tabs</a></li>
                        <li class=""><a href="ui_accordion.html">Accordion</a></li>
                    </ul>
                </li>
                <li class="panel active">
                    <a class="accordion-toggle " data-toggle="collapse"
                       data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
                    <ul id="components-collapse" class="panel-collapse collapse in">
                        <li class="active"><a href="component_calendar.html">Calendar</a></li>
                        <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                        <li class=""><a href="component_gallery.html">Gallery</a></li>
                        <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                        <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                        <li class=""><a href="component_list_groups.html">List Groups</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
                    <ul id="tables-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                        <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
                    <ul id="grid-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="grid_basic.html">Basic</a></li>
                        <li class=""><a href="grid_live.html">Live</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
                    <ul id="special-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                        <li class=""><a href="special_invoice.html">Invoice</a></li>
                        <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                        <li><a target="_blank" href="login.html">Login</a></li>
                        <li><a target="_blank" href="error.html">Error Page</a></li>
                        <li><a href="landing.html" data-no-pjax>Landing</a></li>
                        <li><a href="../white/index.html" data-no-pjax>White <sup class="text-warning fw-bold">new</sup></a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
                    <ul id="menu-levels-collapse" class="panel-collapse collapse">
                        <li><a href="#">Item 1.1</a></li>
                        <li><a href="#">Item 1.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                            <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                                    <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.1</a></li>
                                        <li><a href="#">Item 3.2</a></li>
                                        <li><a href="#">Item 3.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Item 2.2</a></li>
                                <li class="panel">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                                    <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                        <li><a href="#">Item 3.4</a></li>
                                        <li><a href="#">Item 3.5</a></li>
                                        <li><a href="#">Item 3.6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
            <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
            <ul class="sidebar-labels">
                <li>
                    <a href="#">
                        <!-- yep, .circle again -->
                        <i class="fa fa-circle text-warning"></i>
                        <span class="label-name">My Recent</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-gray"></i>
                        <span class="label-name">Starred</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-danger"></i>
                        <span class="label-name">Background</span>
                    </a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Projects</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Sales Report</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                    </div>
                    <small>Provide required notes</small>
                </div>
            </div>
        </nav>    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.jpg" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.jpg" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        <div class="content container">
        <h2 class="page-title">Components -  <span class="fw-semi-bold">Calendar App</span> <small>Draggable access</small></h2>
        <div class="row">
            <div class="col-md-8">
                <section class="widget">
                    <header>
                        <h4>
                            <i class="fa fa-calendar"></i>
                            Calendar
                        </h4>
                        <div class="actions">
                            <div class="btn-group mr-sm">
                                <button class="btn btn-default" id="calender-prev"><i class="fa fa-angle-left"></i></button>
                                <button class="btn btn-default" id="calender-next"><i class="fa fa-angle-right"></i></button>
                            </div>
                            <button id="today" type="button" class="btn btn-warning mr-sm">
                                Today
                            </button>
                            <div id="calendar-switcher" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio" name="view" value="month" checked> Month
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="view" value="agendaWeek"> Week
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="view" value="agendaDay"> Day
                                </label>
                            </div>
                        </div>
                    </header>
                    <div class="body">
                        <div id="calendar" class="calendar mt-lg"> </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="widget">
                    <header>
                        <h5>
                            <i class="fa fa-exchange"></i>
                            Draggable events
                        </h5>
                    </header>
                    <div class="body">
                        <div id='external-events'>
                            <div class='external-event bg-danger' data-event-class="bg-danger text-white"><i class="fa fa-check"></i> Buy this template</div>
                            <div class='external-event bg-warning' data-event-class="bg-warning text-white">Study some Node</div>
                            <div class='external-event bg-success' data-event-class="bg-success text-white">Make a tea</div>
                            <div class='external-event bg-primary' data-event-class="bg-primary text-white"><i class="fa fa-book"></i> Go to school</div>
                            <div class='external-event bg-info' data-event-class="bg-info text-white">Open windows</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="event-name">Event name</label>
                            <input type="text" id="event-name" name="name" class="form-control bg-gray-lighter">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default">Cancel</button>
                        <button data-dismiss="modal" id="create-event" class="btn btn-success">OK</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page specific libs -->
        <script src="lib/moment/min/moment.min.js"></script>
        <script src="lib/jquery-ui/ui/core.js"></script>
        <script src="lib/jquery-ui/ui/widget.js"></script>
        <script src="lib/jquery-ui/ui/mouse.js"></script>
        <script src="lib/jquery-ui/ui/draggable.js"></script>
        <script src="lib/fullcalendar/dist/fullcalendar.min.js"></script>
        <!-- page application js -->
        <script src="js/component-calendar.js"></script>

</body>
</html>