<template>
  <v-list dense>
        
    <v-list-item to="/admin">
      <v-list-item-action>
        <v-icon>mdi-view-dashboard</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Dashboard</v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-list-group
      no-action
    >
      <template v-slot:activator>
        <v-list-item-action>
            <v-icon>mdi-account-multiple</v-icon>
          </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>User Manegment</v-list-item-title>
        </v-list-item-content>
      </template>
      
        <v-list-item to="/admin/users">
          <v-list-item-content>
            <v-list-item-title>Users</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <!-- <v-list-item to="/admin/roles">
          <v-list-item-content>
            <v-list-item-title>Roles</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item to="/admin/permissions">
          <v-list-item-content>
            <v-list-item-title>Permissions</v-list-item-title>
          </v-list-item-content>
        </v-list-item> -->

        <v-list-item to="/admin/activities">
          <v-list-item-content>
            <v-list-item-title>Activities</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      
    </v-list-group>
    
    <v-list-item to="/admin/categories">
      <v-list-item-action>
        <v-icon>mdi-home</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Categories</v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-list-item to="/admin/plants">
      <v-list-item-action>
        <v-icon>mdi-home</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Plants</v-list-item-title>
      </v-list-item-content>
    </v-list-item>

    <v-list-item link to="/admin/settings">
      <v-list-item-action>
        <v-icon>mdi-settings</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Settings</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </v-list>
</template>

<script>
  
  export default {


  };

</script>


