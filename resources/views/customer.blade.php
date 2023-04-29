
<div>
    
    <div class="container" style="padding: 30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                              customer Details
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                      
                        <table class="table table-striped" style="border:1px solid blue;">
                            <thead>
                                <tr>
                                    <th>Customer Business Name</th>
                                    <th>Customer mobile</th>
                                    <th>User Name</th>
                                    <th>User Id</th>
                                    <th style="color:red;">Customer Items Detail</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer )
                                <tr>
                                  
                                    <th>{{ $customer->business_name }}</th>
                                    <th>{{ $customer->contact }}</th>
                                    <th>{{ $customer->user->name }}</th>
                                    <th>{{ $customer->user_id }}</th>
                                        
                                        
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>


                                <table class="table table-striped" style="        margin-left: 474px;
    margin-top: -42px; border:1px solid red;    background: aliceblue;">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>Item Name</th>
                                            <th>Item Price</th>
                                            
                                            <th>Item Image</th>
                                            <!-- <th>Quantity</th> -->
                                          
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            @foreach ($customer->items as $item )
                                               
                                            
                                         
                                                <tr style="">
                                                    
                                                    <th>{{ $customer->user_id }}</th>
                                                    <th>{{ $item->name }}</th>
                                                    <th>{{ $item->price }}</th>   
                                                                                                      
                                                    <th><img src="{{ $item->image }}" width="50px"/></th>



                                                   
                                                </tr>
                                                
                                                
                                            @endforeach
                                        @endforeach

                                        <!-- @foreach ($customers as $customer)
                                                        @foreach ($customer->stocks as $stock)
                                                            <th style="display:grid;">{{ $stock->quantity }}</th>  
                                                        @endforeach
                                                    @endforeach -->
                                       
                                    </tbody>
                                    
                                   

                                </table>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
