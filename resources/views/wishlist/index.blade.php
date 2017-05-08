@extends('wishlist.layouts.master')

@section('title', '願望清單')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="font-size:16px;font-family:DFKai-sb;text-align:center;"  list-style-type="decimal">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">商品編號</th>
                        <th width="70" style="text-align: center">商品名稱</th>
                        <th width="70" style="text-align: center">加入日期</th>
                        <th width="70" style="text-align: center">數量</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($wishlist as $post)
                    <tr>
                        <td style="vertical-align:middle">{{ $post->auction_id   }}</td>
                        <td style="vertical-align:middle">{{ $post->user_id }}</td>
                        <td style="vertical-align:middle">{{ $post->auction_id }}</td>
                        <td style="vertical-align:middle">{{ $post->date }}</td>
                        <td style="vertical-align:middle">{{ $post->quantity }}</td>
                        <td style="vertical-align:middle">
                            <div>
                                
                                <form action="{{ route('admin.products.destroy', $post->id) }}" method="POST" align="center">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-success">投注</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
