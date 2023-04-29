
 

<div>
    
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Tolal Transaction Details
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      
                        <table class="table table-striped" style="border:1px solid blue;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Quantity</th>
                                    <th>type</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                               @foreach ($stocks as $stock )
                     
                                    <tr style="text-align:center;">
                                        <td>{{$stock->id}}</td>
                                        <td>{{$stock->user_id}}</td>
                                        <td>{{$stock->user->name}}</td>
                                        <td><b>{{$stock->item->id}}</b></td>
                                        <td>{{$stock->item->name}}</td>
                                        <td>{{$stock->item->price}}</td>
                                        <td>{{$stock->quantity}}</td>
                                        <td>{{$stock->type}}</td>
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
