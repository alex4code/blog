<?php
class __MyTemplates_74cfebc3f6ea6d64eb0e56f480be7a33 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Navigation -->
';
        $buffer .= $indent . '    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
';
        $buffer .= $indent . '        <div class="navbar-header">
';
        $buffer .= $indent . '            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
';
        $buffer .= $indent . '                <span class="sr-only">Toggle navigation</span>
';
        $buffer .= $indent . '                <span class="icon-bar"></span>
';
        $buffer .= $indent . '                <span class="icon-bar"></span>
';
        $buffer .= $indent . '                <span class="icon-bar"></span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <a class="navbar-brand" href="/">My blog</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- /.navbar-header -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="nav navbar-top-links navbar-right">
';
        $buffer .= $indent . '            <li class="dropdown">
';
        $buffer .= $indent . '                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
';
        $buffer .= $indent . '                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <ul class="dropdown-menu dropdown-user">
';
        $buffer .= $indent . '                    <li><a href="/auth/logout/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
';
        $buffer .= $indent . '                    </li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '                <!-- /.dropdown-user -->
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <!-- /.dropdown -->
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- /.navbar-top-links -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="navbar-default sidebar" role="navigation">
';
        $buffer .= $indent . '            <div class="sidebar-nav navbar-collapse">
';
        $buffer .= $indent . '                <ul class="nav" id="side-menu">
';
        $buffer .= $indent . '                    <li class="sidebar-search">
';
        $buffer .= $indent . '                        <div class="input-group custom-search-form">
';
        $buffer .= $indent . '                            <input type="text" class="form-control" placeholder="Search...">
';
        $buffer .= $indent . '                                <span class="input-group-btn">
';
        $buffer .= $indent . '                                <button class="btn btn-default" type="button">
';
        $buffer .= $indent . '                                    <i class="fa fa-search"></i>
';
        $buffer .= $indent . '                                </button>
';
        $buffer .= $indent . '                            </span>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <!-- /input-group -->
';
        $buffer .= $indent . '                    </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <li>
';
        $buffer .= $indent . '                        <a href="/admin"><i class="fa fa-table fa-fw"></i> Posts</a>
';
        $buffer .= $indent . '                    </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- /.sidebar-collapse -->
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- /.navbar-static-side -->
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page-wrapper">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-lg-12">
';
        $buffer .= $indent . '                <h1 class="page-header">Posts</h1>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- /.col-lg-12 -->
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- /.row -->
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-lg-12">
';
        $buffer .= $indent . '                <div class="panel panel-default">
';
        $buffer .= $indent . '                    <div class="panel-heading">
';
        $buffer .= $indent . '                        DataTables Advanced Tables
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <!-- /.panel-heading -->
';
        $buffer .= $indent . '                    <div class="panel-body">
';
        $buffer .= $indent . '                        <div class="dataTable_wrapper">
';
        $buffer .= $indent . '                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
';
        $buffer .= $indent . '                                <thead>
';
        $buffer .= $indent . '                                <tr>
';
        $buffer .= $indent . '                                    <th>Title</th>
';
        $buffer .= $indent . '                                    <th>uri</th>
';
        $buffer .= $indent . '                                    <th>Short text</th>
';
        $buffer .= $indent . '                                    <th>is visible</th>
';
        $buffer .= $indent . '                                    <th>Controls</th>
';
        $buffer .= $indent . '                                </tr>
';
        $buffer .= $indent . '                                </thead>
';
        $buffer .= $indent . '                                <tbody>
';
        // 'list' section
        $buffer .= $this->section008d5a3d3b523bbcb7f579ed09ac7e79($context, $indent, $context->find('list'));
        $buffer .= $indent . '                                </tbody>
';
        $buffer .= $indent . '                            </table>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <!-- /.table-responsive -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <!-- /.panel-body -->
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <!-- /.panel -->
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <!-- /.col-lg-12 -->
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <!-- /.row -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <!-- /#page-wrapper -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<!-- /#wrapper -->';
        return $buffer;
    }

    private function sectionCf8fcb0e8b229537f1dcd5a48603b87a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                {{is_visible}}
                                            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('is_visible'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
        return $buffer;
    }

    private function section008d5a3d3b523bbcb7f579ed09ac7e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                    <tr class="odd gradeX">
                                        <td>{{title}}</td>
                                        <td>{{uri}}</td>
                                        <td>{{short_text}}</td>
                                        <td>

                                            {{#is_visible}}
                                                {{is_visible}}
                                            {{/is_visible}}
                                        </td>
                                        <td><button data-id="{{id}}" class="btn btn-primary">Edit</button> <button class="btn btn-warning" data-id="{{id}}">Delete</button></td>
                                    </tr>
                                ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                    <tr class="odd gradeX">
';
                $buffer .= $indent . '                                        <td>';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                        <td>';
                $value = $this->resolveValue($context->find('uri'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                        <td>';
                $value = $this->resolveValue($context->find('short_text'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                                        <td>
';
                $buffer .= $indent . '
';
                // 'is_visible' section
                $buffer .= $this->sectionCf8fcb0e8b229537f1dcd5a48603b87a($context, $indent, $context->find('is_visible'));
                $buffer .= $indent . '                                        </td>
';
                $buffer .= $indent . '                                        <td><button data-id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-primary">Edit</button> <button class="btn btn-warning" data-id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Delete</button></td>
';
                $buffer .= $indent . '                                    </tr>
';
                $context->pop();
            }
        }
        return $buffer;
    }
}
