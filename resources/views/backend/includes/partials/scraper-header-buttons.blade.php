<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.scraper.index', 'ALL', [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.scraper.show', 'Show', [], ['class' => 'btn btn-success btn-xs']) }}
    {{--{{ link_to_route('admin.scraper.deactivated', trans('menus.backend.scrapers.deactivated'), [], ['class' => 'btn btn-warning btn-xs']) }}
    {{ link_to_route('admin.scraper.deleted', trans('menus.backend.scrapers.deleted'), [], ['class' => 'btn btn-danger btn-xs']) }}--}}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('menus.backend.scrapers.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.scraper.index', 'ALL') }}</li>
            <li>{{ link_to_route('admin.scraper.show', 'Show') }}</li>
            <li class="divider"></li>
{{--
            <li>{{ link_to_route('admin.scraper.deactivated', 'Deactivated') }}</li>
            <li>{{ link_to_route('admin.scraper.deleted', 'Deleted') }}</li>
--}}
        </ul>
    </div><!--btn group-->
</div><!--pull right-->

<div class="clearfix"></div>