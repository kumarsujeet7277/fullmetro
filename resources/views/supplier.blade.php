
<div>
    
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                              Supplier Details
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      
                        <table class="table table-striped" style="border:1px solid blue;">
                            <thead>
                                <tr>
                                    <th>Supplier Business Name</th>
                                    <th>Supplier mobile</th>
                                    <th>User Name</th>
                                    <th>User Id</th>
                                    <th style="color:red;">Supplier Items Detail</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier )
                                <tr>
                                  
                                    <th>{{ $supplier->business_name }}</th>
                                    <th>{{ $supplier->contact }}</th>
                                    <th>{{ $supplier->user->name }}</th>
                                    <th>{{ $supplier->user_id }}</th>
                                        
                                        
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>


                                <table class="table table-striped" style="        margin-left: 456px;
    margin-top: -64px; border:1px solid red;    background: aliceblue;">
                                    <thead>
                                        <tr>
                                            
                                            <th>User Id</th>
                                            <th>Item Name</th>
                                            <th>Item Price</th>
                                            <th>Item Image</th>
   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $supplier)
                                          
                                                @foreach ($supplier->items as $item)
                                                    
                                                
                                  
                                           
                
                                          
                                                <tr style="">
                                                    <th>{{ $supplier->user_id}}</th>
                                                    <th>{{  $item->name}}</th>
                                                    <th>{{  $item->price}}</th>
                                                    
                                                    <th><img src="Local\Temp\{{  $item->image}}" width="50px"/></th>
                                                   
                                                
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>

                                </table>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
