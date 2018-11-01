@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Корзина</div>

                <div class="card-body">
                    <form>
                    <table border='2' cellspacing="10" cellpadding="10" align="center" width="100%">
                        <tr border = '1.5' align="center" font-weight="bold" >

                            <td> Picture</td>
                            <td> Name</td>
                            <td> Price</td>
                            <td> Amount</td>
                            <td> Sum</td>
                            <td> Condition</td>

                        </tr>
                        
                        @foreach ($arr as $key=>$value)
                        @php
                        $sum = $products[$key]->price*$value;
                        @endphp
                    <tr>
                        <td><span id='picture_{{$key}}'>
                            @if(products[$key]->picture!='')
                            <img src="{{asset('uploads/thumb/'.$products[$key]->picture)}}"/>
                            @endif</span></td>
                            <td><span id="name_{{$key}}">{{products[$key]->name}}</span></td>
                            <td><span id="price_{{$key}}">{{products[$key]->price}}</span></td>
                            <td><span id="value_{{$key}}">{{$value}}</span></td>   
                            <td><span id="summa_{{$key}}">{{$sum}}</span></td>    
                            <td><span id=""><a href="{{asset('basket/delete/'.$key)}}"></a>&times;</span></td>
                    </tr>
                        <tr>
                            <td colspan="3">Итого</td>
                             <td colspan="3"></td>
                        </tr>
                        @endforeach
                    </table>
                </form>
                    <p style="margin-top: 30px;"><strong>Ваше имя:</strong><br>
                    <input type="text" size="40">
                    </p>
                    <p style="margin-top: 10px;"><strong>email:</strong><br>
                    <input type="text" size="40">
                    </p>
                    <p style="margin-top: 10px;"><strong>Телефон:</strong><br>
                    <input type="text" size="40">
                    </p>
                    <p><input type="submit" value="Оформить заказ" style="background-color: red; color: white">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
