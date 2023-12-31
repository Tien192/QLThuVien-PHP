@extends('clients.index')

@section('body')

<section>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12" style="border: 1px solid rgb(228, 190, 201);">
                <div class="cart-table clearfix">
                    <form action="{{route('clients.books.xac-nhan-dat')}}" method="post">
                        @if(Session::get('msg-suc-cart'))
                        <div class="alert alert-primary">
                            {{Session::get('msg-suc-cart')}}
                        </div>
                        @endif
                        <table class="table table-responsive" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Ảnh</th>
                                    <th>Tên sách</th>
                                    <th>Tập</th>
                                    <th>Nội dung</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(empty($list_book) || $list_book == [])
                                    <tr>
                                        <td>Bạn chưa chọn sách nào !</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @else
                                    @foreach($list_book as $key => $book)
                                        @foreach($book as $key1 => $item)
                                        <tr>

                                            <td class="cart_product_img" for="check_1" style="text-align: center;">
                                                @if(isset($item->AnhTap))
                                                <a><img src="{{asset('storage/books/'.$item->AnhTap)}}" alt="Product" width="80px" height="90px"></a>
                                                @else
                                                <a><img src="{{asset('storage/books/'.$item->AnhSach)}}" alt="Product" width="80px" height="90px"></a>
                                                @endif
                                            </td>
                                            <td>
                                                <h5>{{$item->TenSach}}</h5>
                                            </td>
                                            <td class="cart_product_desc">
                                                <span>
                                                    @if(isset($item->TenTap))
                                                    {{$item->TenTap}}
                                                    @else
                                                    Không có
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                {{ Str::limit($item->NoiDung, $limit = 68, $end = '...') }}
                                            </td>

                                            <td>


                                                @if(isset($item->MaTap) && isset($item->TenTap))
                                                <a href="{{ route('clients.books.delete-from-cart-1',['idSach' => $item->MaSach,'tenSach' => $item->TenSach,'idTap' => $item->MaTap,'tenTap' => $item->TenTap]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')" type="submit" class="btn-sm btn-danger">Xóa</a>
                                                @else
                                                <a href="{{ route('clients.books.delete-from-cart-2',['idSach' => $item->MaSach,'tenSach' => $item->TenSach]) }}" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')" type="submit" class="btn-sm btn-danger">Xóa</a>
                                                @endif
                                            </td>
                                        </tr>
                                            @if(isset($item->MaTap) && isset($item->TenTap))
                                            <input type="text" hidden value="{{$item->MaTap}}" name="idTap[]">
                                            @else
                                            <input type="text" hidden value="{{$item->MaSach}}" name="idSach[]">
                                            @endif
                                        @endforeach
                                    @endforeach
                                    <tr>
                                        <td style="text-align: center;">Thời gian mượn</td>
                                        <td>
                                            <input class="define-input" type="number" name="ThoiGianMuon" style="margin-top: 15px; max-width: 80px;" min="1" max="14"> Ngày
                                        </td>
                                        <td>  @error('ThoiGianMuon')
                                            <span style="color: red;">{{$message}}</span>
                                            @enderror</td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div>
                            <button onclick="return confirm('Xác nhận đặt !')" type="submit" class="btn-sm btn-secondary" @if(empty($list_book) || $list_book==[]) hidden @endif>Xác nhận đặt</button>
                        </div>
                        @csrf

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection