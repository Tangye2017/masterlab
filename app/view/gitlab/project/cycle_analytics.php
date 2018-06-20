<!DOCTYPE html>
<html class="" lang="en">
<head  >

    <? require_once VIEW_PATH.'gitlab/common/header/include.php';?>
    <script src="/gitlab/assets/webpack/filtered_search.bundle.js"></script>

</head>
<body class="" data-group="" data-page="projects:issues:index" data-project="xphp">
<? require_once VIEW_PATH.'gitlab/common/body/script.php';?>
<header class="navbar navbar-gitlab with-horizontal-nav">
    <a class="sr-only gl-accessibility" href="#content-body" tabindex="1">Skip to content</a>
    <div class="container-fluid">
        <? require_once VIEW_PATH.'gitlab/common/body/header-content.php';?>
    </div>
</header>
<script>
    var findFileURL = "/ismond/xphp/find_file/master";
</script>
<div class="page-with-sidebar">
    <? require_once VIEW_PATH.'gitlab/project/common-page-nav-project.php';?>

    <? require_once VIEW_PATH.'gitlab/project/common-home-nav-links-sub-nav.php';?>

    <div class="content-wrapper page-with-layout-nav page-with-sub-nav">
        <div class="alert-wrapper">


            <div class="flash-container flash-container-page">
            </div>


        </div>
        <div class="content" id="content-body">

            <div data-request-path="/ismond/xphp/cycle_analytics" id="cycle-analytics" class="container-fluid"><div class="bordered-box landing content-block"><i class="fa fa-times dismiss-icon"></i> <div class="row"><div class="col-sm-3 col-xs-12 svg-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 102" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="0" d="m35.12 56.988c4.083-4.385 5.968-12.155 5.968-24.04 0-20.2-15.874-32.16-15.874-32.16-1.114-.954-2.929-.979-4.04 0 0 0-15.874 11.957-15.874 32.16 0 11.882 1.884 19.652 5.968 24.04h23.848"></path><mask id="1" width="35.783" height="56.924" x="0" y="0" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#0"></use></mask></defs><g fill="none" fill-rule="evenodd" transform="translate(0-4)"><g transform="translate(32.15 3.976)"><g fill="#6b4fbb"><path d="m11.928 56.988l1.325-1.325v3.313c0 .737.59 1.325 1.325 1.325h17.229c.736 0 1.325-.59 1.325-1.325v-3.313l1.325 1.325h-22.53m22.53-1.325v3.313c0 1.464-1.18 2.651-2.651 2.651h-17.229c-1.464 0-2.651-1.178-2.651-2.651v-3.313h22.53m-5.964 7.361h.663c0 3.294-2.67 5.964-5.964 5.964-3.294 0-5.964-2.67-5.964-5.964h.663.663c0 2.562 2.077 4.639 4.639 4.639 2.562 0 4.639-2.077 4.639-4.639h.663"></path><path d="m5.816 42.535c-.346-2.839-.515-6.03-.515-9.584 0-20.2 15.874-32.16 15.874-32.16 1.106-.979 2.921-.954 4.04 0 0 0 15.874 11.957 15.874 32.16 0 11.882-1.884 19.652-5.968 24.04h-23.848c-2.861-3.073-4.643-7.807-5.453-14.453-.06-.493-.115-.997-.164-1.511l-4.04 2.884c-.891.637-1.614 2.041-1.614 3.137v14.581c0 1.465.971 1.958 2.165 1.106l8.691-6.208c-.282-.332-.553-.681-.813-1.048l-8.648 6.177c-.147.105-.069.152-.069-.027v-14.581c0-.668.516-1.671 1.059-2.059l3.432-2.451m38.4 20.2c1.193.852 2.165.359 2.165-1.106v-14.581c0-1.096-.723-2.5-1.614-3.137l-4.04-2.884c-.049.514-.104 1.018-.164 1.511l3.432 2.451c.543.388 1.059 1.391 1.059 2.059v14.581c0 .179.078.132-.069.027l-8.648-6.177c-.26.367-.531.716-.813 1.048l8.691 6.208"></path></g><use fill="#fff" stroke="#6b4fbb" stroke-width="2.651" mask="url(#1)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#0"></use><g fill="#b5a7dd"><path d="m30.482 28.494c0-4.03-3.263-7.289-7.289-7.289-4.03 0-7.289 3.263-7.289 7.289 0 4.03 3.263 7.289 7.289 7.289 4.03 0 7.289-3.263 7.289-7.289m-15.904 0c0-4.758 3.857-8.614 8.614-8.614 4.758 0 8.614 3.857 8.614 8.614 0 4.758-3.857 8.614-8.614 8.614-4.758 0-8.614-3.857-8.614-8.614"></path><path d="m27.17 28.494c0-2.196-1.78-3.976-3.976-3.976-2.196 0-3.976 1.78-3.976 3.976 0 2.196 1.78 3.976 3.976 3.976 2.196 0 3.976-1.78 3.976-3.976m-9.277 0c0-2.928 2.373-5.301 5.301-5.301 2.928 0 5.301 2.373 5.301 5.301 0 2.928-2.373 5.301-5.301 5.301-2.928 0-5.301-2.373-5.301-5.301"></path></g><path fill="#6b4fbb" d="m34.458 87.47c0 1.098.89 1.988 1.988 1.988 1.098 0 1.988-.89 1.988-1.988 0-.366.297-.663.663-.663.366 0 .663.297.663.663 0 1.83-1.483 3.313-3.313 3.313-1.826 0-3.307-1.478-3.313-3.302 0-.002 0-.003 0-.005v-2.663c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.657m-21.2-6.615c0-.002 0-.003 0-.005v-2.663c0-.358-.297-.657-.663-.657-.369 0-.663.294-.663.657v2.657c0 1.098-.89 1.988-1.988 1.988-1.098 0-1.988-.89-1.988-1.988 0-.366-.297-.663-.663-.663-.366 0-.663.297-.663.663 0 1.83 1.483 3.313 3.313 3.313 1.826 0 3.307-1.477 3.313-3.302m5.301 7.285c0-.001 0-.002 0-.003v-16.576c0-.362-.297-.658-.663-.658-.369 0-.663.295-.663.658v16.571c0 2.01-1.632 3.645-3.645 3.645-2.01 0-3.645-1.632-3.645-3.645 0-.366-.297-.663-.663-.663-.366 0-.663.297-.663.663 0 2.745 2.225 4.97 4.97 4.97 2.742 0 4.966-2.221 4.97-4.963m10.602 8.607v-18.555c0-.365-.297-.661-.663-.661-.369 0-.663.296-.663.661v18.557c0 0 0 0 0 .001.001 2.744 2.226 4.968 4.97 4.968 2.745 0 4.97-2.225 4.97-4.97 0-.366-.297-.663-.663-.663-.366 0-.663.297-.663.663 0 2.01-1.632 3.645-3.645 3.645-2.01 0-3.645-1.632-3.645-3.645m3.976-25.19c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m0 6.627c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m-10.602-6.627c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m5.301 0c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m-5.301 6.627c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m0 6.627c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663m-10.602-13.253c0-.363.294-.657.663-.657.366 0 .663.299.663.657v2.663c0 .363-.294.657-.663.657-.366 0-.663-.299-.663-.657v-2.663"></path></g><path fill="#e2ddf2" d="m97.75 76.54c0-2.745-2.225-4.97-4.97-4.97-2.745 0-4.97 2.225-4.97 4.97 0 2.745 2.225 4.97 4.97 4.97 2.745 0 4.97-2.225 4.97-4.97m-8.614 0c0-2.01 1.632-3.645 3.645-3.645 2.01 0 3.645 1.632 3.645 3.645 0 2.01-1.632 3.645-3.645 3.645-2.01 0-3.645-1.632-3.645-3.645m-60.964-57.651c0-2.745-2.225-4.97-4.97-4.97-2.745 0-4.97 2.225-4.97 4.97 0 2.745 2.225 4.97 4.97 4.97 2.745 0 4.97-2.225 4.97-4.97m-8.614 0c0-2.01 1.632-3.645 3.645-3.645 2.01 0 3.645 1.632 3.645 3.645 0 2.01-1.632 3.645-3.645 3.645-2.01 0-3.645-1.632-3.645-3.645"></path><path fill="#b5a7dd" d="m98.41 34.458c0-1.83-1.483-3.313-3.313-3.313-1.83 0-3.313 1.483-3.313 3.313 0 1.83 1.483 3.313 3.313 3.313 1.83 0 3.313-1.483 3.313-3.313m-5.301 0c0-1.098.89-1.988 1.988-1.988 1.098 0 1.988.89 1.988 1.988 0 1.098-.89 1.988-1.988 1.988-1.098 0-1.988-.89-1.988-1.988m-86.14 20.542c0-1.83-1.483-3.313-3.313-3.313-1.83 0-3.313 1.483-3.313 3.313 0 1.83 1.483 3.313 3.313 3.313 1.83 0 3.313-1.483 3.313-3.313m-5.301 0c0-1.098.89-1.988 1.988-1.988 1.098 0 1.988.89 1.988 1.988 0 1.098-.89 1.988-1.988 1.988-1.098 0-1.988-.89-1.988-1.988"></path></g></svg></div> <div class="col-sm-8 col-xs-12 inner-content"><h4>
                                Introducing Cycle Analytics
                            </h4> <p>
                                Cycle Analytics gives an overview of how much time it takes to go from idea to production in your project.
                            </p> <a target="_blank" href="/help/user/project/cycle_analytics" class="btn">Read more</a></div></div></div> <i class="fa fa-spinner fa-spin" style="display: none;"></i> <div class="wrapper"><div class="panel panel-default"><div class="panel-heading">
                            Pipeline Health
                        </div> <div class="content-block"><div class="container-fluid"><div class="row"><div class="col-sm-3 col-xs-12 column"><h3 class="header">1</h3> <p class="text">New Issue</p></div><div class="col-sm-3 col-xs-12 column"><h3 class="header">-</h3> <p class="text">Commits</p></div><div class="col-sm-3 col-xs-12 column"><h3 class="header">-</h3> <p class="text">Deploys</p></div> <div class="col-sm-3 col-xs-12 column"><div class="dropdown inline js-ca-dropdown"><button data-toggle="dropdown" type="button" class="dropdown-menu-toggle"><span class="dropdown-label">Last 30 days</span> <i class="fa fa-chevron-down"></i></button> <ul class="dropdown-menu dropdown-menu-align-right"><li><a data-value="30" href="#">
                                                        Last 30 days
                                                    </a></li> <li><a data-value="90" href="#">
                                                        Last 90 days
                                                    </a></li></ul></div></div></div></div></div></div> <div class="stage-panel-container"><div class="panel panel-default stage-panel"><div class="panel-heading"><nav class="col-headers"><ul><li class="stage-header"><span class="stage-name">
Stage
</span> <i aria-hidden="true" data-placement="top" title="The phase of the development lifecycle." class="has-tooltip fa fa-question-circle"></i></li> <li class="median-header"><span class="stage-name">
Median
</span> <i aria-hidden="true" data-placement="top" title="The value lying at the midpoint of a series of observed values. E.g., between 3, 5, 9, the median is 5. Between 3, 5, 7, 8, the median is (5+7)/2 = 6." class="has-tooltip fa fa-question-circle"></i></li> <li class="event-header"><span class="stage-name">
Related Issues
</span> <i aria-hidden="true" data-placement="top" title="The collection of events added to the data gathered for that stage." class="has-tooltip fa fa-question-circle"></i></li> <li class="total-time-header"><span class="stage-name">
Total Time
</span> <i aria-hidden="true" data-placement="top" title="The time taken by each data entry gathered by that stage." class="has-tooltip fa fa-question-circle"></i></li></ul></nav></div> <div class="stage-panel-body"><nav class="stage-nav"><ul><li class="stage-nav-item active"><div class="stage-nav-item-cell stage-name">
                                                Issue
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Plan
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Code
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Test
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Review
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Staging
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li><li class="stage-nav-item"><div class="stage-nav-item-cell stage-name">
                                                Production
                                            </div> <div class="stage-nav-item-cell stage-median"><span class="stage-empty">
Not enough data
</span></div></li></ul></nav> <div class="section stage-events"><!----> <div class="empty-stage-container"><div class="empty-stage"><div class="icon-no-data"><svg xmlns="http://www.w3.org/2000/svg" viewBox="211 0 78 36" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><circle id="a" cx="5" cy="31" r="5"></circle> <mask id="e" width="10" height="10" x="0" y="0" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use></mask> <circle id="b" cx="29" cy="14" r="5"></circle> <mask id="f" width="10" height="10" x="0" y="0" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use></mask> <circle id="c" cx="53" cy="24" r="5"></circle> <mask id="g" width="10" height="10" x="0" y="0" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use></mask> <circle id="d" cx="73" cy="5" r="5"></circle> <mask id="h" width="10" height="10" x="0" y="0" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use></mask></defs> <g fill="none" fill-rule="evenodd" transform="translate(211)"><path stroke="#B5A7DD" stroke-width="2" d="M5 31l24-17 26 10L73 5" stroke-linecap="round" stroke-dasharray="3 6"></path> <use fill="#FFF" stroke="#6B4FBB" stroke-width="6" mask="url(#e)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use> <use fill="#FFF" stroke="#6B4FBB" stroke-width="6" mask="url(#f)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use> <use fill="#FFF" stroke="#B5A7DD" stroke-width="6" mask="url(#g)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use> <use fill="#FFF" stroke="#B5A7DD" stroke-width="6" mask="url(#h)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use></g></svg></div> <h4>We don't have enough data to show this stage.</h4> <p>
                                                The issue stage shows the time it takes from creating an issue to assigning the issue to a milestone, or add the issue to a list on your Issue Board. Begin creating issues to see data for this stage.
                                            </p></div></div> <!----></div></div></div></div></div></div>

        </div>
    </div>
</div>
</body>
</html>


</div>