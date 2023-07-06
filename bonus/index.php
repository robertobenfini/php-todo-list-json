<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDoList</title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

        
        <!-- css personalizzato -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <div id="app">

            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="content">
                            <h3><strong>La mia ToDoList</strong></h3>
                            <hr>

                            <ul class="list-unstyled">

                                <!-- cicla gli elementi dell'array -->
                                <li v-for="(item, index) in todoList" :key="index">
                                    <div class="d-flex justify-content-between">
                                        <div :class="item.done === true ? 'item-done' : '' ">
                                            {{ item.text }}
                                        </div>
                                        
                                        <!-- Pulsanti per cambiare lo stato del task e cancellarlo -->
                                        <div>
                                            <button class="btn btn-sm me-2" :class="item.done ? 'btn-dark' : 'btn-primary'" @click="changeItemStatus(index)">
                                                <i class="fas" :class="item.done ? 'fa-x' : 'fa-check'"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" @click="">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Campo di input per aggiungere nuovo elemento -->
                            <div class="input-group">
                                <div class="input-field">
                                    <input type="text" class="input-item" placeholder="aggiungi elemento" v-model="todoItem" @keyup.enter="updateList">
                                </div>
                                <div class="input_button">
                                    <button class="btn btn-sm btn-success" @click="updateList">
                                        <i class="fas fa-plus"></i>
                                        Aggiungi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        

    <!-- libreria di Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <!-- script personalizzato -->
    <script src="./js/script.js" type="text/javascript"></script>
    </body>
</html>