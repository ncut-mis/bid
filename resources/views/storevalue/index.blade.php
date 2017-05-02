@extends('storevalue.layouts.master')

@section('title', '儲值紀錄')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="font-family:DFKai-sb;">
            儲值紀錄
        </h1>
    </div>
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="font-size:16px;font-family:DFKai-sb;text-align:center;"  list-style-type="decimal">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">儲值日期</th>
                        <th width="70" style="text-align: center">儲值金額</th>
                        <th width="70" style="text-align: center">銀行名稱/代碼</th>
                        <th width="70" style="text-align: center">儲值方式</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($storevalues as $post)
                    <tr>
                        <td style="vertical-align:middle">{{ $post->datetime}}</td>
                        <td style="vertical-align:middle">{{ $post->amount_of_money}}</td>
                        <td style="vertical-align:middle">{{ $post->bank_name_code}}</td>
                        <td style="vertical-align:middle">{{ $post->payment_method}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
