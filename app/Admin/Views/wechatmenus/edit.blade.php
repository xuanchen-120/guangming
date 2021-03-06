@extends('RuLong::layouts.app')

@section('title', 'wechat - menucreate')

@section('content')
<form method="post" action="{{ route('Admin.wechatmenus.update', $wechatmenu) }}" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">菜单名称</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="name" value="{{ $wechatmenu->name }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">按钮类型</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="type" value="{{ $wechatmenu->type }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">上级菜单</label>
        <div class="col-xs-8">
            <select name="parent_id" class="form-control">
                @foreach ($parents as $parent)
                <option value="{{ $parent['id'] }}" @if($parent['id'] == $wechatmenu->parent_id) selected  @endif>{!! $parent['title_show'] !!}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">排序</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" placeholder="" name="sort" value="{{ $wechatmenu->sort }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">触发关键字</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="key" value="{{ $wechatmenu->key }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">VIEW地址</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="url" value="{{ $wechatmenu->url }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">发送图文MEDIA_ID</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="media_id" value="{{ $wechatmenu->media_id }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">关联小程序</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="appid" value="{{ $wechatmenu->appid }}" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">启动路径</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="" name="pagepath" value="{{ $wechatmenu->pagepath }}" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-4 col-xs-offset-3">
            @csrf
            @method('put')
            <button class="btn btn-primary ajax-post" type="button">保存</button>
        </div>
    </div>
</form>
@endsection
