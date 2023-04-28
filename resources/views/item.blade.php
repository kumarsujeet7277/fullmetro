
 

<div>
    
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Transaction Details
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>type</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                               @foreach ($items as $item )
                     
                                    <tr>
                                        @if( $item->stock )
                                            
                                            <td>{{ $item->user->$id }}</td>
                                        @endif
                                       
                                        <td>{{$item->name}}</td>
                                        <td></td>
                                        
                                       
                                        
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
