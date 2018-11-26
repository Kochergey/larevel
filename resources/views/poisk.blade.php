@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Корзина</div>

                <div class="card-body">
                    <form method = 'post' action="{{asset('order')}}"  >
                        {!!csrf_field()!!}
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
                        $val = (int)$value;
                        if($val>0){
                        $sum = $products[$key]->price*$val;
                    }
                        
                        @endphp
                    <tr>
                        <td><span id='picture_{{$key}}'>
                            @if($products[$key]->picture!='')
                            <img src="{{asset('uploads/thumb/'.$products[$key]->picture)}}"/>
                            @endif</span></td>
                            <td><span id="name_{{$key}}">{{$products[$key]->name}}</span></td>
                            <td><span id="price_{{$key}}">{{$products[$key]->price}}</span></td>
                            <td><span id="value_{{$key}}"></span><input type  = 'number' name = "{{$key}}" value = "{{$value}}"/></td>   
                            <td><span id="summa_{{$key}}">{{$sum}}</span></td>    
                            <td><span id=""><a href="{{asset('basket/delete/'.$key)}}"></a>&times;</span></td>
                    </tr>
                        <tr>
                            <td colspan="3">Итого</td>
                             <td colspan="3"></td>
                        </tr>
                        @endforeach
                    </table>
              

                    <p style="margin-top: 30px;" ><strong>Ваше имя:</strong><br>
                        <input type ="text" size="40" name="name" >
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{$errors->first('name')}}
                            </strong></span>
                            @endif
                    
                    </p>
                    <p style="margin-top: 10px;" ><strong>email:</strong><br>
                        <input type="text" size="40" name="email" >
                         @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{$errors->first('email')}}
                            </strong></span>
                            @endif
                   
                    </p>
                    <p style="margin-top: 10px;"  ><strong>Телефон:</strong><br>
                    <input type="text" size="40" name="phone" >
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{$errors->first('phone')}}
                            </strong></span>
                            @endif
                    </p>
                    <p><input type="submit" value="Оформить заказ" style="background-color: red; color: white">

 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
