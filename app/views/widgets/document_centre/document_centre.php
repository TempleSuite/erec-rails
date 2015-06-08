<?php
  $this->injectJs('js/plugin/dropzone/dropzone.min.js', true);
?>

<header>
  <span class="widget-icon"> <i class="fa fa-file-text"></i> </span>
  <h2> Document Centre </h2>
</header>

<!-- widget div-->
<div>
  <div class="row">
    <div class="col-xs-12">
      <!-- widget edit box -->
      <div class="jarviswidget-editbox">
        <div>
          <label>Title:</label>
          <input type="text" />
        </div>
      </div>
      <!-- end widget edit box -->
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12" style="max-height: 200px; overflow: hidden;">
      <!-- widget edit box -->
      <div class="jarviswidget-editbox">
        <!-- This area used as dropdown edit box -->
      </div>
      <!-- end widget edit box -->

      <!-- widget content -->
      <div class="widget-body">
        <form action="upload.php" class="dropzone" id="mydropzone"></form>
      </div>
      <!-- end widget content -->
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="widget-body no-padding">
        <!-- content goes here -->
        <table class="table table-striped table-hover table-condensed">
          <thead>
            <tr>
              <th>Activity Name</th>
              <th class="text-align-center">Date</th>
              <th class="text-align-center">Uploaded By</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">Ancient Chinese Tangram</a></td>
              <td class="text-align-center">Mar 28, 2015</td>
              <td class="text-align-center">
                Ken Storm
                <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                  <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog fa-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-xs pull-right">
                    <li>
                      <a href="#"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                    </li>
                    <li class="divider"></li>
                    <li class="text-align-center">
                      <a href="#">Cancel</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#">Barnyard Babble</a></td>
              <td class="text-align-center">April 05, 2015</td>
              <td class="text-align-center">
                Hourash Falati
                <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                  <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog fa-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-xs pull-right">
                    <li>
                      <a href="#"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                    </li>
                    <li class="divider"></li>
                    <li class="text-align-center">
                      <a href="#">Cancel</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#">Doctorball</a></td>
              <td class="text-align-center">April 25, 2015</td>
              <td class="text-align-center">
                Brian Patel
                <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                  <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog fa-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-xs pull-right">
                    <li>
                      <a href="#"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                    </li>
                    <li class="divider"></li>
                    <li class="text-align-center">
                      <a href="#">Cancel</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="#">Poor Little Fly On The Wall</a></td>
              <td class="text-align-center">April 17, 2015</td>
              <td class="text-align-center">
                Rick Ayling
                <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                  <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog fa-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-xs pull-right">
                    <li>
                      <a href="#"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                    </li>
                    <li class="divider"></li>
                    <li class="text-align-center">
                      <a href="#">Cancel</a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan=5>
              <ul class="pagination pagination-xs no-margin">
                <li class="prev disabled">
                  <a href="#">Previous</a>
                </li>
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li class="next">
                  <a href="#">Next</a>
                </li>
              </ul></td>
            </tr>
          </tfoot>
        </table>
        <!-- end content -->
      </div>
    </div>
  </div>
</div>
