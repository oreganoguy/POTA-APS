<?php include('Main.php');
   $main = new Main();
   $values = $main->counter(100);
   $longest = 0;
   foreach ($values as $val) {
      if ($val > $longest) {
      $longest = $val;
     }
    }
    function percentage (int $val, $longest){
        return 100*$val/$longest;
    }

?>
<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
    <div id="app">
        <v-app>
            <v-content>
                    <v-container fluid fill-height>
                            <v-layout align-center justify-center>
                              <v-flex xs12 sm12 md8>
                                <v-card class="elevation-12">
                                    <v-toolbar dark color="primary">
                                        <v-toolbar-title>Sort compare</v-toolbar-title>
                                        <v-spacer></v-spacer>
                                    </v-toolbar>
                                    <v-card-text>
                                        <div class="text-xs-center">
                                            <?php foreach($values as $key => $value){
                                                ?>  
                                                <span>
                                                <span><?= $key ?> :</span>
                                                <v-progress-circular
                                                    style="margin: 1rem"
                                                    :rotate="180"
                                                    :size="100"
                                                    :width="15"
                                                    :value="<?= percentage($value,$longest) ?>"
                                                    color="primary"
                                                >
                                                <?= $value ?>
                                                </v-progress-circular>
                                                </span>
                                            <?php } ?>
                                        </div>               
                                    </v-card-text>
                                </v-card>
                              </v-flex>
                            </v-layout>
                    </v-container>
            </v-content>
        </v-app>
    </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
  <script>
    new Vue({
    el: '#app',
        data: () => ({
        })
    })
  </script>
</html>