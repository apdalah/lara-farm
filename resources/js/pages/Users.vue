<template>
  <v-data-table
    :headers="headers"
    :items="dataTable"
    sort-by="Created"
    class="elevation-1"
  >
    <template v-slot:top>
      <v-toolbar text color="grey-lighten">
        <v-toolbar-title>Admins</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog" max-width="500px">
          <template v-slot:activator="{ on }">
            <v-btn color="primary" dark class="mb-2" v-on="on">New Admin</v-btn>
          </template>
          <v-card>
            <v-card-title>
                <span class="headline">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
                <v-container grid-list-md>
                    <v-layout wrap>
                        <v-flex xs12 >
                            <v-text-field v-model="editedItem.name" label="Name"></v-text-field>
                        </v-flex>
                        <v-flex xs12 >
                            <v-text-field v-model="editedItem.email" label="Email"></v-text-field>
                        </v-flex>

                        <v-flex xs12 >
                            <v-text-field v-model="editedItem.password" label="password"></v-text-field>
                        </v-flex>

                        <v-flex xs12 >
                            <v-text-field v-model="editedItem.confirm_password" label="Confirm Password"></v-text-field>
                        </v-flex>

                        <!-- <v-flex xs12>
                            <h3>Roles</h3>
                            <v-select
                                    v-model="editedItem.role"
                                    :items="allRoles"
                                    label="Roles"
                                    item-text="name"
                                    return-object
                                    chips
                            ></v-select>
                        </v-flex>

                        <v-flex xs12>
                            <v-select
                                    v-model="editedItem.permissions"
                                    :items="allPermissions"
                                    label="Permissions"
                                    item-text="name"
                                    return-object
                                    multiple
                                    chips
                            ></v-select>
                        </v-flex> -->

                    </v-layout>
                </v-container>
            </v-card-text>

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                <v-btn color="blue darken-1" text @click="save">Save</v-btn>
            </v-card-actions>
        </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:item.actions="{ item }">
        <v-icon
          small
          class="mr-2"
          @click="editItem(item)"
        >
          mdi-pencil
        </v-icon>
        <v-icon
          small
          @click="deleteItem(item)"
        >
          mdi-delete
        </v-icon>
      <!-- </td> -->
    </template>
    <template v-slot:no-data>
      <v-btn color="primary" @click="initialize">Reset</v-btn>
    </template>
  </v-data-table>
</template>


<script>
  export default {
    data: () => ({
      dialog: false,
      headers: [
        { text: 'Username',align: 'start',value: 'name' },
        { text: 'Email', value: 'email' },
        // {text: 'Role', value: 'role.name'},
        { text: 'Actions', value: 'actions', sortable: false },
      ],
      dataTable: [],
      editedIndex: -1,
      editedItem: {
        name: '',
        email: '',
      },
      defaultItem: {
        name: '',
        email: '',
      },
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
    },

    created () {
      this.initialize()
    },

    methods: {
      initialize () {
        
        axios.get('/api/users').then(response => {
          this.dataTable = response.data.data;
        });

        // axios.get('/api/roles').then(response=>this.allRoles=response.data.data);
        // axios.get('/api/permissions').then(response=>this.allPermissions=response.data.data);
          
      },

      // not working
      editItem (item) {
        this.editedIndex = this.dataTable.indexOf(item);
        this.editedItem = Object.assign({}, item);
        this.dialog = true;
      },

      deleteItem (item) {
        const index = this.dataTable.indexOf(item);
        confirm('Are you sure you want to delete this item?') && this.dataTable.splice(index, 1);

        axios.delete('/api/users/'+item.id).then(response=>console.log(response.data))
      },

      close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

      save () {

        if (this.editedIndex > -1) {
          Object.assign(this.dataTable[this.editedIndex], this.editedItem);

          axios.put('/api/users/'+this.editedItem.id,this.editedItem).then(response=>console.log(response.data));
        } else {
          this.dataTable.push(this.editedItem);

          axios.post('/api/users/',this.editedItem).then(response=>console.log(response.data));
        }
        this.close();
      },
    },
  };
</script>