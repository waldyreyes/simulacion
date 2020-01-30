<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">

</head>
<body>
        @if (session('datos'))
        {{-- <div class="alert alert-success alert-dismissible fade show" role="alert" >
          {{session('datos')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      @endif
    <div class="row">
        <div class="col-3">
{{-- @if ($cajero1->cantidad) --}}
    

        <form action="{{route('cola1.destroy', $cajero1->first()->id)}}" method="post">
            @csrf
            @method('DELETE')
                <div>
                    <input class="btn btn-success" type="submit" value="Atender Persona del cajero 1">
                </div>
            </form>

        <img src="{{asset('img/cajero.jpg')}}" alt="">
        <table>
                <tbody>
                        @foreach ($cajero1 as $personas1)
                            <tr>
                                    <td><img src="{{asset('img/usuario.png')}}" alt=""></td>   
                                    <td><form action="{{route('cola1.destroy', $cajero1->first()->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                <div>
                                                    <input class="btn btn-warning" type="submit" value="salir de la fila">
                                                </div>
                                            </form></td>                     
                            </tr> 
                        @endforeach
                      
                      
                </tbody>
               
        </table>
        
        {{-- @endif --}}
        <form action="{{route('cola1.store')}}" method="post">
                @csrf
                <div class="container">
                    <input type="text" name="cantidad" id="" value="1" hidden>
                    <input class="btn btn-danger" type="submit" value="Entrar en fila 1">
                </div>
            </form>
        </div>

        <div class="col-3">
                <form action="{{route('cola2.destroy', $cajero2->first()->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <div>
                            <input class="btn btn-success" type="submit" value="Atender Persona del cajero 2">
                        </div>
                    </form>
                <img src="{{asset('img/cajero.jpg')}}" alt="">
                <table>
                        <tbody>
                                @foreach ($cajero2 as $personas2)
                                    <tr>
                                            <td><img src="{{asset('img/usuario.png')}}" alt=""></td> 
                                            <td> <form action="{{route('cola2.destroy', $cajero2->first()->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                        <div>
                                                            <input class="btn btn-warning" type="submit" value="Salir de la fila">
                                                        </div>
                                                    </form></td>
                                    </tr> 
                                @endforeach
                              
                              
                        </tbody>
                       
                </table>
                
                {{-- {{ $ent->appends($_GET)->links() }} --}}
                <form action="{{route('cola2.store')}}" method="post">
                        @csrf
                    <div class="container">
                            <input type="text" name="cantidad" id="" value="1" hidden>
                        <input class="btn btn-danger" type="submit" value="Entrar en fila 2">
                    </div>
                </form>
        </div>

        <div class="col-3">
                <form action="{{route('cola3.destroy', $cajero3->first()->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <div>
                            <input class="btn btn-success" type="submit" value="Atender Persona del cajero 3">
                        </div>
                    </form>
                <img src="{{asset('img/cajero.jpg')}}" alt="">
                <table>
                        <tbody>
                                @foreach ($cajero3 as $personas3)
                                    <tr>
                                        {{-- <td>{{$personas3}}</td> --}}
                                        <td><img src="{{asset('img/usuario.png')}}" alt=""></td>  
                                        <td><form action="{{route('cola3.destroy', $cajero3->first()->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <div>
                                                        <input class="btn btn-warning" type="submit" value="Salir de la fila">
                                                    </div>
                                                </form></td>                     
                                    </tr> 
                                @endforeach
                              
                              
                        </tbody>
                       
                </table>
                <form action="{{route('cola3.store')}}" method="post">
                        @csrf
                    <div class="container">
                            <input type="text" name="cantidad" id="" value="1" hidden>
                        <input class="btn btn-danger" type="submit" value="Entrar en fila 3">
                    </div>
                </form>
        </div>

        <div class="col-3">
                <form action="{{route('cola4.destroy', $cajero4->first()->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                        <div>
                            <input class="btn btn-success" type="submit" value="Atender Persona del cajero 4">
                        </div>
                    </form>
                <img src="{{asset('img/cajero.jpg')}}" alt="">
                <table>
                        <tbody>
                                @foreach ($cajero4 as $personas4)
                                    <tr>
                                        {{-- <td>{{$personas3}}</td> --}}
                                        <td><img src="{{asset('img/usuario.png')}}" alt=""></td>  
                                        <td><form action="{{route('cola4.destroy', $cajero4->first()->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <div>
                                                        <input class="btn btn-warning" type="submit" value="Salir de la fila">
                                                    </div>
                                                </form></td>                     
                                    </tr> 
                                @endforeach
                              
                              
                        </tbody>
                       
                </table>
                <form action="{{route('cola4.store')}}" method="post">
                        @csrf
                    <div class="container">
                            <input type="text" name="cantidad" id="" value="1" hidden>
                        <input class="btn btn-danger" type="submit" value="Entrar en fila 4">
                    </div>
                </form>
        </div>
        
    </div>
    <script src="{{asset('plugins/jquery/jquery-3.4.1.js')}}"></script>   
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>