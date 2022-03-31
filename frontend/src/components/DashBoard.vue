<template>
       
        

        <div id="DashBoard">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-12 mx-auto">
                        <div class="p-3">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#addContact" @click="clearFields()">Add new</button>
                        </div>
                        <div class="card card-primary">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody v-for="contact in contacts" :key="contact.id">
                                        <tr key="index">
                                            <td>{{contact.id}}</td>
                                            <td scope="row">{{contact.name}}</td>
                                            <td>{{contact.tel}}</td>
                                            <td>{{contact.tel}}</td>
                                            <td>{{contact.tel}}</td>
                                            
                                            <td>
                                                <a @click="getContact(contact.id)" data-toggle="modal"
                                                    data-target="#updateContact"
                                                    class="btn btn-sm btn-warning text-white">Update</a>
                                                <a @click="deleteContact(contact.id)"
                                                    class="btn btn-sm btn-danger text-white">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Add Modal -->
            <div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add new contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">

                                <div class="form-group">
                                    <input type="text" required placeholder="Name" 
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" required placeholder="Phone" 
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm btn-success " @click="addContact()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Update Modal -->
            <div class="modal fade" id="updateContact" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <input type="text" required placeholder="Name" 
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" required placeholder="Phone" 
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm btn-success" @click="updateContact()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>


<script>



export default {
  name: 'DashBoard',
  
}
</script>


<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
